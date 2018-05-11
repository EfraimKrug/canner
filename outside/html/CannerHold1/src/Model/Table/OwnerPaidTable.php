<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerPaid Model
 *
 * @method \App\Model\Entity\OwnerPaid get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerPaid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerPaid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerPaid|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerPaid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerPaid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerPaid findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnerPaidTable extends Table
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

        $this->setTable('owner_paid');
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
            ->integer('OwnerID')
            ->requirePresence('OwnerID', 'create')
            ->notEmpty('OwnerID');

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
