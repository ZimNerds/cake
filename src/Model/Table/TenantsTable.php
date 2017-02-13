<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tenants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\HasMany $Applications
 * @property \Cake\ORM\Association\HasMany $Employment
 * @property \Cake\ORM\Association\HasMany $References
 * @property \Cake\ORM\Association\HasMany $RentalHistory
 *
 * @method \App\Model\Entity\Tenant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tenant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tenant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tenant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tenant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tenant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tenant findOrCreate($search, callable $callback = null, $options = [])
 */
class TenantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tenants');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('Applications', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->hasMany('Employment', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->hasMany('References', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->hasMany('RentalHistory', [
            'foreignKey' => 'tenant_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->allowEmpty('first_name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('phone');

        $validator
            ->date('birth_date')
            ->allowEmpty('birth_date');

        $validator
            ->allowEmpty('driver_license_number');

        $validator
            ->allowEmpty('requested_lease_term');

        $validator
            ->decimal('monthly_gross_pay')
            ->allowEmpty('monthly_gross_pay');

        $validator
            ->decimal('additional_income')
            ->allowEmpty('additional_income');

        $validator
            ->decimal('assets')
            ->allowEmpty('assets');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('notes');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
