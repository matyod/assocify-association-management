<?php

namespace Core;

use Dotenv\Dotenv;
use PDO;
use PDOException;
use Core\Database;

class DatabaseManager
{
  private static $database = null;

  public static function getDatabase()
  {
    if (self::$database === null) {
      self::$database = new Database();
    }

    return self::$database;
  }
}