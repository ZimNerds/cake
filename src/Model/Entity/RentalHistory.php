<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RentalHistory Entity
 *
 * @property int $id
 * @property int $tenant_id
 * @property string $address
 * @property int $owner_id
 * @property string $owner_name
 * @property float $monthly_rent
 * @property \Cake\I18n\Time $duration_of_residency_from
 * @property \Cake\I18n\Time $to
 * @property string $reason_for_leaving
 * @property string $notes
 *
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\Owner $owner
 */
class RentalHistory extends Entity
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
