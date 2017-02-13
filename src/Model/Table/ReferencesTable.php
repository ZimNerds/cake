<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * References Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tenants
 *
 * @method \App\Model\Entity\Reference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reference newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reference|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reference[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reference findOrCreate($search, callable $callback = null, $options = [])
 */
class ReferencesTable extends Table
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

        $this->table('references');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Tenants', [
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
            ->allowEmpty('phone');

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

        return $rules;
    }
}
