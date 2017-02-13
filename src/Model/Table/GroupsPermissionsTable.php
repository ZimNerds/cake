<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupsPermissions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Permissions
 * @property \Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\GroupsPermission get($primaryKey, $options = [])
 * @method \App\Model\Entity\GroupsPermission newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GroupsPermission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GroupsPermission|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GroupsPermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GroupsPermission[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GroupsPermission findOrCreate($search, callable $callback = null, $options = [])
 */
class GroupsPermissionsTable extends Table
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

        $this->table('groups_permissions');
        $this->displayField('permission_id');
        $this->primaryKey('permission_id');

        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
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
            ->allowEmpty('tableName');

        $validator
            ->integer('allowInsert')
            ->allowEmpty('allowInsert');

        $validator
            ->integer('allowView')
            ->requirePresence('allowView', 'create')
            ->notEmpty('allowView');

        $validator
            ->integer('allowEdit')
            ->requirePresence('allowEdit', 'create')
            ->notEmpty('allowEdit');

        $validator
            ->integer('allowDelete')
            ->requirePresence('allowDelete', 'create')
            ->notEmpty('allowDelete');

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
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
