<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerPaid Model
 *
 * @method \App\Model\Entity\CannerPaid get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerPaid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerPaid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerPaid|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerPaid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerPaid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerPaid findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerPaidTable extends Table
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

        $this->setTable('canner_paid');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->integer('CannerID')
            ->requirePresence('CannerID', 'create')
            ->notEmpty('CannerID');

        $validator
            ->decimal('Amount')
            ->allowEmpty('Amount');

        $validator
            ->scalar('DatePaid')
            ->maxLength('DatePaid', 10)
            ->allowEmpty('DatePaid');

        return $validator;
    }
}
