<?php

namespace Core;

class Logger
{
  private $logDirectory;

  public function __construct($logDirectory = 'log/error')
  {
    $this->logDirectory = base_path($logDirectory);
  }

  public function logError($category, $message)
  {
    $logData = $this->prepareLogData($category, $message);

    $this->writeLog('/log-error-' . $logData['date'] . '.log', $logData['txt']);

    $this->writeLog('/log-error-' . $logData['date'] . '.json', json_encode($logData['json']));

    // return true;
  }

  private function prepareLogData($category, $message)
  {
    date_default_timezone_set('Asia/Kuala_Lumpur');

    $date = date('Y-m-d');
    $time = date('H:i:s');
    $timezone = date('T');

    return [
      'date' => $date,
      'time' => $time,
      'timezone' => $timezone,
      'category' => $category,
      'message' => $message,
      'txt' => "$date | $time GMT$timezone | $category | $message",
      'json' => [
        'date' => $date,
        'time' => $time,
        'timezone' => $timezone,
        'category' => $category,
        'message' => $message,
      ],
    ];
  }

  private function writeLog($fileName, $logEntry)
  {
    $logFile = $this->logDirectory . '/' . $fileName;

    if (!file_exists($logFile)) {
      touch($logFile);
    }
    error_log($logEntry . PHP_EOL, 3, $logFile);
  }

  public function getLogDir()
  {
    return $this->logDirectory;
  }
}