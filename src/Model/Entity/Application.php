<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property int $tenant_id
 * @property string $status
 * @property int $property_id
 * @property int $unit_id
 * @property string $type_id
 * @property string $total_number_of_occupants
 * @property \Cake\I18n\Time $start_date
 * @property \Cake\I18n\Time $end_date
 * @property string $recurring_charges_frequency
 * @property \Cake\I18n\Time $next_due_date
 * @property float $rent
 * @property float $security_deposit
 * @property \Cake\I18n\Time $security_deposit_date
 * @property string $emergency_contact
 * @property string $co_signer_details
 * @property string $notes
 * @property string $agreement
 *
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\Property $property
 * @property \App\Model\Entity\Unit $unit
 * @property \App\Model\Entity\Type $type
 */
class Application extends Entity
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
