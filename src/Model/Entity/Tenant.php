<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tenant Entity
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $phone
 * @property \Cake\I18n\Time $birth_date
 * @property string $driver_license_number
 * @property int $country_id
 * @property string $requested_lease_term
 * @property float $monthly_gross_pay
 * @property float $additional_income
 * @property float $assets
 * @property string $status
 * @property string $notes
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Application[] $applications
 * @property \App\Model\Entity\Employment[] $employment
 * @property \App\Model\Entity\Reference[] $references
 * @property \App\Model\Entity\RentalHistory[] $rental_history
 */
class Tenant extends Entity
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
