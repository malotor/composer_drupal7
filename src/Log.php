<?php

namespace custom_log;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class Log extends Singleton {

  protected $log;

  public function __construct() {
    $this->log = new Logger('MyCustomLogger');
    $this->log->pushHandler(new StreamHandler(DRUPAL_ROOT . '/error_custom.log', Logger::DEBUG));
  }

  public function addDebug($message) {
    $this->log->addDebug($message);
  }
}

