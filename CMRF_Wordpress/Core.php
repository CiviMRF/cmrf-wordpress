<?php

/**
 * Wordpress-based implementation of a CMRF Core
 *
 * @author TODO
 */

namespace CMRF\Wordpress;

require_once(dirname(__FILE__) .'/Call.php');
require_once(dirname(__FILE__) .'/Connection/Curl.php');

use CMRF\Core\Core         as AbstractCore;
use CMRF\Core\Connection;

class Core extends AbstractCore {
    parent::__construct(null);
  }

  /**
   * Retrieve the connection from the connection profile
   * Get instance of the connector through a drupal callback function.
   *
   * @param $connector_id
   * @return Connection
   */
  protected function getConnection($connector_id) {
    // TODO: get core;
    $core = null; 
    // TODO: cache
    return new Connection($core, $connector_id);
  }


  /*********************************************************
   *  Use Drupal variables to store config for the moment  *
   *********************************************************/

  public function getDefaultProfile() {
    // TODO
    //$profile = cmrf_core_default_profile();
    //return $profile['name'];
  }

  public function getConnectionProfiles() {
    // TODO: 
    // return cmrf_core_list_profiles();
  }

  public function getRegisteredConnectors() {
    // TODO
    // return variable_get('cmrf_core_connectors');
  }

  protected function storeRegisteredConnectors($connectors) {
    // TODO
    // return variable_set('cmrf_core_connectors', $connectors);
  }

  public function getSettings() {
    // TODO
    // return variable_get('cmrf_core_settings');
  }

  protected function storeSettings($settings) {
    // TODO
    // return variable_set('cmrf_core_settings', $settings);
  }

}
