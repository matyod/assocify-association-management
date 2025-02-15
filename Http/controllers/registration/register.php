<?php

use Core\Validator;
use Core\Member;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];

  $fields = [
    'first-name' => [
      'error' => 'firstName',
      'validator' => 'isValidFirstLastName',
    ],
    'last-name' => [
      'error' => 'lastName',
      'validator' => 'isValidFirstLastName',
    ],
    'country-code' => [
      'error' => 'countryCode',
      'validator' => 'isValidCountryCode',
    ],
    'phone-number' => [
      'error' => 'phoneNumber',
      'validator' => 'isValidPhoneNumber',
    ],
    'username' => [
      'error' => 'username',
      'validator' => 'isValidUsername',
    ],
    'email' => [
      'error' => 'email',
      'validator' => 'validateSanitizeEmail',
    ],
    'password' => [
      'error' => 'password',
      'validator' => 'isValidPassword',
    ],
  ];

  foreach ($fields as $field => $config) {
    $value = $_POST[$field] ?? null;
    $validationMethod = $config['validator'];

    if (!Validator::$validationMethod($value)) {
      $errors[$config['error']] = "Invalid $field.";
    }
  }

  if (!empty($errors)) {
    return require view_path('registration/index.view.php');
  }

  try {
    $member = new Member($db);

    try {
      $result = $member->createNewMember($_POST['username'], $_POST['password'], $_POST['email'], $_POST['first-name'], $_POST['last-name'], $_POST['country-code'], $_POST['phone-number']);

      if (is_string($result)) {
        throw new PDOException($result);
      } else {
        sleep(2);
        header('Location: /login');
        die();
      }
    } catch (PDOException $e) {
      logError('Database', $e->getMessage());
      $errors['exception'] = 'Username, email, or phone number already exists. Please try again.';
      throw $e;
    } catch (Exception $e) {
      logError('General', $e->getMessage());
      $errors['exception'] = 'Something went wrong. Please try again later.';
      throw $e;
    } finally {
      return require view_path('registration/index.view.php');
    }
  } catch (PDOException $e) {
    logError('Database', $e->getMessage());
  } catch (Exception $e) {
    logError('General', $e->getMessage());
  } finally {
    $errors['exception'] = 'Something went wrong. Please try again later.';
    return require view_path('registration/index.view.php');
  }
}