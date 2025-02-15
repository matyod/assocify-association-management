<?php

use Http\Forms\LoginForm;
use Core\Member;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginForm = new LoginForm();
  if (!$loginForm->validate($username, $password)) {
    $errors = $loginForm->getErrors();
    return require view_path('authentication/index.view.php');
  }

  try {
    $member = new Member($db);
    $result = $member->getMemberByUsernamePassword($_POST['username'], $_POST['password']);

    if (!$result) {
      throw new PDOException('Invalid username or password. Please try again.');
    } else {
      // TODO:
      // Perhaps need to call router only() method twice,
      // first for auth, second for admin/member

      $session->login([
        'username' => $result['username'],
        'role' => isset($result['role']) ? 'admin' : 'member',
        'logged-in' => true,
      ]);

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