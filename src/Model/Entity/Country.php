<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity
 *
 * @property int $id
 * @property string $sortname
 * @property string $name
 * @property int $phonecode
 *
 * @property \App\Model\Entity\Owner[] $owners
 * @property \App\Model\Entity\Property[] $properties
 * @property \App\Model\Entity\State[] $states
 * @property \App\Model\Entity\Tenant[] $tenants
 * @property \App\Model\Entity\Unit[] $units
 */
class Country extends Entity
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
}
