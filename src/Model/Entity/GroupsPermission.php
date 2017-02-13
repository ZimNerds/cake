<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GroupsPermission Entity
 *
 * @property int $permission_id
 * @property int $group_id
 * @property string $tableName
 * @property int $allowInsert
 * @property int $allowView
 * @property int $allowEdit
 * @property int $allowDelete
 *
 * @property \App\Model\Entity\Permission $permission
 * @property \App\Model\Entity\Group $group
 */
class GroupsPermission extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'permission_id' => false
    ];
}
