<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employment Entity
 *
 * @property int $id
 * @property int $tenant_id
 * @property string $employer_name
 * @property int $city_id
 * @property string $employer_phone
 * @property \Cake\I18n\Time $employed_from
 * @property \Cake\I18n\Time $employed_till
 * @property string $occupation
 * @property string $notes
 *
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\City $city
 */
class Employment extends Entity
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
