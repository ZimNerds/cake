<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property string $name
 * @property int $type_id
 * @property float $number_of_units
 * @property string $photo
 * @property string $photo_dir
 * @property int $owner_id
 * @property string $operating_account
 * @property float $property_reserve
 * @property string $lease_term
 * @property int $country_id
 * @property string $address
 * @property int $city_id
 * @property int $state_id
 * @property float $zip
 *
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Owner $owner
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Application[] $applications
 * @property \App\Model\Entity\Unit[] $units
 */
class Property extends Entity
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
