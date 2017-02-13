<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Owner Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $company_name
 * @property \Cake\I18n\Time $date_of_birth
 * @property string $primary_email
 * @property string $alternate_email
 * @property string $phone
 * @property int $country_id
 * @property string $address
 * @property int $city_id
 * @property int $state_id
 * @property float $zip
 * @property string $comments
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Property[] $properties
 * @property \App\Model\Entity\RentalHistory[] $rental_history
 */
class Owner extends Entity
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
