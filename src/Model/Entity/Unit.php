<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Unit Entity
 *
 * @property int $id
 * @property int $property_id
 * @property string $unit_number
 * @property string $photo
 * @property string $photo_dir
 * @property string $status
 * @property string $size
 * @property int $country_id
 * @property int $address
 * @property int $city_id
 * @property int $state_id
 * @property int $zip
 * @property string $rooms
 * @property float $bathroom
 * @property string $features
 * @property float $market_rent
 * @property float $rental_amount
 * @property float $deposit_amount
 * @property string $description
 *
 * @property \App\Model\Entity\Property $property
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Application[] $applications
 */
class Unit extends Entity
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
