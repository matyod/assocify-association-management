<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
  protected $errors = [];

  public function validate($username, $password)
  {
    if (!Validator::isValidUsername($username)) {
      $this->errors['username'] = "Username must be between 3 and 20 characters long and can only contain letters, numbers, hyphens, and underscores. ";
    }

    if (!Validator::isValidPassword($password)) {
      $this->errors['password'] = "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character (e.g., !@#$%^&*).";
    }

    return empty($this->errors);
  }

  public function getErrors()
  {
    return $this->errors;
  }
}