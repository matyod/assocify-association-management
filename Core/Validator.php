<?php

namespace Core;

class Validator
{
  protected const REGEX_FIRST_LAST_NAME = '/^[a-zA-Z\s\-]+$/';
  protected const REGEX_USERNAME = '/^[a-zA-Z0-9\-_]{3,20}$/';
  protected const REGEX_PASSWORD_1 = '/[a-z]+/';
  protected const REGEX_PASSWORD_2 = '/[A-Z]+/';
  protected const REGEX_PASSWORD_3 = '/[\d]+/';
  protected const REGEX_PASSWORD_4 = '/[!@#$%^&*]+/';
  protected const COUNTRY_CODES = ['673', '62', '60', '65'];

  protected static function trimString($value)
  {
    return trim($value);
  }

  protected static function isNotEmpty($value)
  {
    return !empty($value);
  }

  protected static function isValidLength($value, $min = 1, $max = INF)
  {
    $value = self::trimString($value);
    return self::isNotEmpty($value) && strlen($value) >= $min && strlen($value) <= $max;
  }

  protected static function isValidRegex($value, $regex)
  {
    return preg_match($regex, self::trimString($value));
  }

  public static function isValidFirstLastName($value, $min = 3, $max = 50)
  {
    return self::isValid($value, 'string') && self::isValidLength($value, $min, $max) && self::isValidRegex($value, self::REGEX_FIRST_LAST_NAME);
  }

  public static function isValidCountryCode($value)
  {
    return self::isValid($value, 'digit') && self::isValidLength($value) && in_array($value, self::COUNTRY_CODES);
  }

  public static function isValidPhoneNumber($value, $min = 4, $max = 15)
  {
    return self::isValid($value, 'digit') && self::isValidLength($value, $min, $max);
    // return self::isValidLength($value, $min, $max);
  }

  public static function isValidUsername($value, $min = 3, $max = 20)
  {
    return self::isValidLength($value, $min, $max) && self::isValidRegex($value, self::REGEX_USERNAME);
  }

  public static function validateSanitizeEmail($value)
  {
    $sanitizedEmail = filter_var(self::trimString($value), FILTER_SANITIZE_EMAIL);
    return filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL) ? $sanitizedEmail : false;
  }

  public static function isValidPassword($value, $min = 8, $max = 128)
  {
    if (!self::isValidLength($value, $min, $max)) {
      return false;
    }

    $checks = [
      self::REGEX_PASSWORD_1,
      self::REGEX_PASSWORD_2,
      self::REGEX_PASSWORD_3,
      self::REGEX_PASSWORD_4,
    ];

    foreach ($checks as $regex) {
      if (!self::isValidRegex($value, $regex)) {
        return false;
      }
    }

    return true;

    // TODO: Check for common passwords from API request
  }

  public static function isValid($value, $type)
  {
    $value = self::trimString($value);

    return match ($type) {
      'string' => is_string($value),
      'numeric' => is_numeric($value),
      'int' => is_int($value),
      'bool' => is_bool($value),
      'array' => is_array($value),

      'alnum' => ctype_alnum($value),
      'alpha' => ctype_alpha($value),
      'digit' => ctype_digit($value),
      'lower' => ctype_lower($value),
      'upper' => ctype_upper($value),

      default => false,
    };
  }
}