<?php

/**
 * @file
 * Definition of Drupal\kingdom\Entity\KingdomNetwork.
 */

namespace Drupal\kingdom\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageControllerInterface;
use Drupal\Core\Entity\EntityAccessController;
use Drupal\Core\Entity\Annotation\EntityType;
use Drupal\Core\Annotation\Translation;

/**
 * Defines the KingdomNetwork configuration entity.
 *
 * @EntityType(
 *   id = "kingdom_network",
 *   label = @Translation("Kingdom Network"),
 *   controllers = {
 *     "storage" = "Drupal\Core\Config\Entity\ConfigStorageController",
 *     "access" = "Drupal\Core\Entity\EntityAccessController"
 *   },
 *   admin_permission = "administer kingdom networks",
 *   config_prefix = "kingdom.network",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   }
 * )
 */
class KingdomNetwork extends ConfigEntityBase {

  /**
   * The machine name of the kingdom network.
   *
   * @var string
   */
  public $id;

  /**
   * The uuid of the kingdom network.
   *
   * @var string
   */
  public $uuid;

  /**
   * The human-readable name of the kingdom network.
   *
   * @var string
   */
  public $label;

  /**
   * A brief description of this kingdom network.
   *
   * @var string
   */
  public $description;

  /**
   * The pull URL for this kingdom network.
   *
   * @var string
   */
  public $pullURL;

  /**
   * The push URL for this kingdom network.
   *
   * @var string
   */
  public $pushURL;

  /**
   * The push user-name for this kingdom network.
   *
   * @var string
   */
  public $pushUser;

  /**
   * The push password for this kingdom network.
   *
   * @var string
   */
  public $pushPassword;

  /**
   * An array of settings pulled from the kingdom network.
   *
   * @var array
   */
  public $settings = array();

  /**
   * An array of local settings about this kingdom network.
   *
   * @var array
   */
  public $localSettings = array();
}
