<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employment Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 * @property \Cake\ORM\Association\BelongsTo $Cities
 *
 * @method \App\Model\Entity\Employment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employment findOrCreate($search, callable $callback = null, $options = [])
 */
class EmploymentTable extends Table
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

        $this->table('employment');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id'
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
            ->allowEmpty('employer_name');

        $validator
            ->allowEmpty('employer_phone');

        $validator
            ->date('employed_from')
            ->allowEmpty('employed_from');

        $validator
            ->date('employed_till')
            ->allowEmpty('employed_till');

        $validator
            ->allowEmpty('occupation');

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
        $rules->add($rules->existsIn(['city_id'], 'Cities'));

        return $rules;
    }
}
