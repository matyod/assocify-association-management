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
use Core\Session;

// dd($_POST);

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

  // dd($errors);

  if (!empty($errors)) {
    return require view_path('authentication/index.view.php');
  }
  // return require view_path('authentication/index.view.php'');
  try {
    // $db = Database::getInstance();
    $member = new Member($db);
    // throw new Exception('test');
    $result = $member->getMemberByUsernamePassword($_POST['username'], $_POST['password']);

    if (!$result) {
      throw new PDOException('Invalid username or password. Please try again.');
    } else {
      // TODO: Check if the role is NULL, set the session role as 'member', otherwise set the session role as 'admin'
      // Perhaps need to call router only() method twice,
      // first for auth, second for admin/member

      // $session = new Session();
      $session->login([
        'username' => $result['username'],
        'logged-in' => true,
      ]);
      // session_regenerate_id(true);
      // $session->set('username', $result['username']);
      // $session->set('logged-in', true);
      // dd($_SESSION);

      sleep(1.5);
      header('location: /home');
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