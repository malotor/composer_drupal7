<?php

namespace custom_log;

class CustomLog {
  /*
  * Wrapper for Logger
  */
  static public function log($message) {
    $logger = Log::getInstance();
    $logger->addDebug($message);
  }
}