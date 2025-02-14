<?php

namespace Core;

use Dotenv\Dotenv;
use PDO;
use PDOException;

/**
 * Database class for handling database connections
 * 
 * This class manages the database connection using PDO,
 * loads the configuration from environment variables,
 * sets the appropriate connection options such as
 * error handling, data fetch mode, prepared statement behavior,
 * connection timeout, and connection persistence.
 * 
 * @author matyod
 * @copyright (c) 2025
 */
class Database
{
  /**
   * @var Database|null The single instance of Database class
   */
  // private static $instance = null;

  /**
   * @var PDO Database connection instance
   */
  private $connection;

  /**
   * Database constructor
   * 
   * Initializes the PDO connection by loading the environment variables
   * and configuring the connection options.
   * 
   * @throws PDOException if the connection to the database fails
   * 
   * @author matyod
   */
  public function __construct()
  {
    $dotenv = Dotenv::createImmutable(base_path());
    $dotenv->load();

    $dbHost = $_ENV['DB_HOST'];
    $dbPort = $_ENV['DB_PORT'];
    $dbName = $_ENV['DB_DATABASE'];
    $dbCharset = $_ENV['DB_CHARSET'];
    $dbUsername = $_ENV['DB_USERNAME'];
    $dbPassword = $_ENV['DB_PASSWORD'];

    $config = [
      'host' => $dbHost,
      'port' => $dbPort,
      'dbname' => $dbName,
      'charset' => $dbCharset,
    ];

    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // set to exception (default) instead of silent or warning
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // returns associative array indexed by column name in result set
      PDO::ATTR_EMULATE_PREPARES => false, // use real prepared statements provided by db server
      PDO::ATTR_TIMEOUT => 10, // time limit for connection attempt before fail
      PDO::ATTR_PERSISTENT => true, // avoid overhead of establishing new connection every single time
    ];

    $dsn = 'mysql:' . http_build_query($config, '', ';');

    try {
      $this->connection = new PDO($dsn, $dbUsername, $dbPassword, $options);
    } catch (PDOException $e) {
      echo 'PDO error: ' . $e->getMessage();
      # TODO 1.
    }
  }

  /**
   * Query method to prepare and execute SQL queries
   *
   * @param string $sql The SQL query to execute
   * @param array $params The parameters to bind to the query
   * 
   * @return PDOStatement The executed statement
   */
  public function query($sql, $params = [])
  {
    $stmt = $this->connection->prepare($sql);

    if (count($params) > 0) {
      foreach ($params as $key => $value) {
        $this->paramTypeCheck($stmt, $key, $value);
      }
    }

    try {
      $stmt->execute();
      return $stmt;
    } catch (PDOException $e) {
      echo 'PDO error: ' . $e->getMessage();
      # TODO 1.
    }
  }

  /**
   * Fetch a single row from the database
   *
   * @param string $sql The SQL query to execute
   * @param array $params The parameters to bind to the query
   * 
   * @return array The fetched row
   */
  public function fetchOne($sql, $params = [])
  {
    $stmt = $this->query($sql, $params);
    return $stmt->fetch();
    // TODO: try-catch
  }

  /**
   * Fetch all rows from the database
   *
   * @param string $sql The SQL query to execute
   * @param array $params The parameters to bind to the query
   * 
   * @return array The fetched rows
   */
  public function fetchAll($sql, $params = [])
  {
    $stmt = $this->query($sql, $params);
    return $stmt->fetchAll();
    // TODO: try-catch
  }

  /**
   * Bind the correct parameter type to the prepared statement
   *
   * @param PDOStatement $stmt The prepared statement
   * @param mixed $key The parameter key
   * @param mixed $value The parameter value
   * 
   * @return void
   */
  private function paramTypeCheck($stmt, $key, $value)
  {
    if (is_int($value)) {
      return $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } elseif (is_string($value)) {
      return $stmt->bindValue($key, $value, PDO::PARAM_STR);
    } elseif (is_bool($value)) {
      return $stmt->bindValue($key, $value, PDO::PARAM_BOOL);
    }
    // TODO: try-catch
  }
}