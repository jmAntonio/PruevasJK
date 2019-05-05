<?php
define('DRUPAL_ROOT', '/var/www');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

class TddTests extends PHPUnit_Framework_TestCase
{
  public function test_tdd_help()
  {
    $this->assertEquals(1,1);
  }
}
?>
