<?php

// dumpDie(session_status());

// validate the form inputs
//   if invalid, return error
// check if account exists
//   if yes, redirect to /home
//   if not, echo error account not exist

use Core\Validator;
use Core\Database;
use Core\Member;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];

  $fields = [
    'username' => [
      'error' => 'username',
      'validator' => 'isValidUsername',
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
    return require view_path('authentication/index.view.php');
  }
  // return require view_path('authentication/index.view.php'');
  try {
    $db = Database::getInstance();
    $member = new Member($db);
    // throw new Exception('test');
    $result = $member->getMemberByUsernamePassword($_POST['username'], $_POST['password']);

    if(!$result){
      throw new PDOException('Invalid username or password. Please try again.');
    } else {
      // $session = new Session();
      $session->set('username', $_POST['username']);
      $session->set('logged-in', true);

      sleep(2);
      header('Location: /home');
      die();
    }
  } catch (PDOException $e) {
    logError('Database', $e->getMessage());
    $errors['exception'] = 'Something went wrong. Please try again later.';
  } catch (Exception $e) {
    logError('General', $e->getMessage());
    $errors['exception'] = 'Something went wrong. Please try again later.';
  } finally {
    return require view_path('authentication/index.view.php');
  }
}