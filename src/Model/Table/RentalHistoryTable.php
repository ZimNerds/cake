<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RentalHistory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 * @property \Cake\ORM\Association\BelongsTo $Owners
 *
 * @method \App\Model\Entity\RentalHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\RentalHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RentalHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RentalHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RentalHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RentalHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RentalHistory findOrCreate($search, callable $callback = null, $options = [])
 */
class RentalHistoryTable extends Table
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

        $this->table('rental_history');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id'
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
            ->allowEmpty('address');

        $validator
            ->allowEmpty('owner_name');

        $validator
            ->decimal('monthly_rent')
            ->allowEmpty('monthly_rent');

        $validator
            ->date('duration_of_residency_from')
            ->allowEmpty('duration_of_residency_from');

        $validator
            ->date('to')
            ->allowEmpty('to');

        $validator
            ->allowEmpty('reason_for_leaving');

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
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));

        return $rules;
    }
}
