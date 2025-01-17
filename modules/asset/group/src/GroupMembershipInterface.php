<?php

namespace Drupal\farm_group;

use Drupal\asset\Entity\AssetInterface;
use Drupal\log\Entity\LogInterface;

/**
 * Asset group membership logic.
 */
interface GroupMembershipInterface {

  /**
   * Check if an asset is a member of a group.
   *
   * @param \Drupal\asset\Entity\AssetInterface $asset
   *   The Asset entity.
   *
   * @return bool
   *   Returns TRUE if the asset is a member of a group, FALSE otherwise.
   */
  public function hasGroup(AssetInterface $asset): bool;

  /**
   * Get group assets that an asset is a member of.
   *
   * @param \Drupal\asset\Entity\AssetInterface $asset
   *   The Asset entity.
   *
   * @return array
   *   Returns an array of assets.
   */
  public function getGroup(AssetInterface $asset): array;

  /**
   * Find the latest group assignment log that references an asset.
   *
   * @param \Drupal\asset\Entity\AssetInterface $asset
   *   The asset entity.
   *
   * @return \Drupal\log\Entity\LogInterface|null
   *   A log entity, or NULL if no logs were found.
   */
  public function getGroupAssignmentLog(AssetInterface $asset): ?LogInterface;

  /**
   * Get assets that are members of groups.
   *
   * @param \Drupal\asset\Entity\AssetInterface[] $groups
   *   An array of group assets to lookup.
   * @param bool $recurse
   *   Boolean: whether or not to recurse and load members of sub-groups.
   *   Defaults to TRUE.
   *
   * @return \Drupal\asset\Entity\AssetInterface[]
   *   Returns an array of assets.
   */
  public function getGroupMembers(array $groups, bool $recurse = TRUE): array;

}
