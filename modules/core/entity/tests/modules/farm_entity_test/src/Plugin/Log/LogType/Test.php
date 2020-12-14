<?php

namespace Drupal\farm_entity_test\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;

/**
 * Provides the test log type.
 *
 * @LogType(
 *   id = "test",
 *   label = @Translation("Test"),
 * )
 */
class Test extends FarmLogType {

}