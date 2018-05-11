<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerContracts Model
 *
 * @property \App\Model\Table\OwnersTable|\Cake\ORM\Association\BelongsTo $Owners
 *
 * @method \App\Model\Entity\OwnerContract get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerContract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerContract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerContract|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerContract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerContract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerContract findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnerContractsTable extends Table
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

        $this->setTable('owner_contracts');
        $this->setDisplayField('owner_id');
        $this->setPrimaryKey(['owner_id', 'date_changed']);

        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id',
            'joinType' => 'INNER'
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
            ->integer('pay_day')
            ->requirePresence('pay_day', 'create')
            ->notEmpty('pay_day');

        $validator
            ->decimal('pay_amount')
            ->allowEmpty('pay_amount');

        $validator
            ->decimal('previous_pay_amount')
            ->allowEmpty('previous_pay_amount');

        $validator
            ->dateTime('date_changed')
            ->allowEmpty('date_changed', 'create');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 200)
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
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));

        return $rules;
    }
}
