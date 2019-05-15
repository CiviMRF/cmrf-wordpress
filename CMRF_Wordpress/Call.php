<?php

/**
 * A simple, serialisable implementation of CMRF\Core\Call
 */

namespace CMRF\Wordpress;

use CMRF\Core\AbstractCall as AbstractCall;
use CMRF\Core\Call         as CallInterface;

class Call extends AbstractCall {

  public function __construct($core, $connector_id, $factory, $id = NULL) {
    parent::__construct($core, $connector_id, NULL, $id);
  }

  public function getEntity() {
    // TODO
  }

  public function getAction() {
    // TODO
  }

  public function getParameters() {
    // TODO
  }

  public function getRequest() {
    // TODO
  }

  public function getOptions() {
    // TODO
  }

  public function getStatus() {
    // TODO
  }

  /**
   * Returns the date and time when the call should be processed.
   *
   * @return \DateTime|null
   */
  public function getCachedUntil() {
    // TODO
  }

  public function getMetadata() {
    // TODO
  }

  public function setStatus($status, $error_message, $error_code) {
    // TODO
  }

  public function setReply($data, $newstatus) {
    // TODO
  }

  public function getReply() {
    // TODO
  }

  public function triggerCallback() {
    // TODO
  }

}

