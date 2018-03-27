<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerDone Model
 *
 * @method \App\Model\Entity\OwnerDone get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerDone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerDone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerDone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnerDoneTable extends Table
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

        $this->setTable('owner_done');
        $this->setDisplayField('OwnerID');
        $this->setPrimaryKey(['OwnerID', 'DateDone']);
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
            ->integer('OwnerID')
            ->allowEmpty('OwnerID', 'create');

        $validator
            ->integer('CannerID')
            ->requirePresence('CannerID', 'create')
            ->notEmpty('CannerID');

        $validator
            ->scalar('DateDone')
            ->maxLength('DateDone', 10)
            ->allowEmpty('DateDone', 'create');

        return $validator;
    }
}
