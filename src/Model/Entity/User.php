<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $fullname
 * @property string $password
 * @property string $email
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $group_id
 * @property int $isBanned
 * @property int $isApproved
 * @property string $custom1
 * @property string $custom2
 * @property string $custom3
 * @property string $custom4
 * @property string $comments
 * @property string $pass_reset_key
 * @property int $pass_reset_expiry
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Permission[] $permissions
 */
class User extends Entity
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
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
