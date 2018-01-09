<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerContracts Model
 *
 * @property \App\Model\Table\CannersTable|\Cake\ORM\Association\BelongsTo $Canners
 *
 * @method \App\Model\Entity\CannerContract get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerContract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerContract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerContract|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerContract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerContract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerContract findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerContractsTable extends Table
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

        $this->setTable('canner_contracts');
        $this->setDisplayField('canner_id');
        $this->setPrimaryKey(['canner_id', 'date_changed']);

        $this->belongsTo('Canners', [
            'foreignKey' => 'canner_id',
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
        $rules->add($rules->existsIn(['canner_id'], 'Canners'));

        return $rules;
    }
}
