<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerPayments Model
 *
 * @property \App\Model\Table\CannersTable|\Cake\ORM\Association\BelongsTo $Canners
 *
 * @method \App\Model\Entity\CannerPayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerPayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerPayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerPayment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerPayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerPayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerPayment findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerPaymentsTable extends Table
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

        $this->setTable('canner_payments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->dateTime('date_paid')
            ->allowEmpty('date_paid');

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
