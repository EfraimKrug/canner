<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerDone Model
 *
 * @method \App\Model\Entity\CannerDone get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerDone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerDone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerDone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerDoneTable extends Table
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

        $this->setTable('canner_done');
        $this->setDisplayField('CannerID');
        $this->setPrimaryKey('CannerID');
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
            ->integer('CannerID')
            ->allowEmpty('CannerID', 'create');

        $validator
            ->integer('OwnerID')
            ->requirePresence('OwnerID', 'create')
            ->notEmpty('OwnerID');

        $validator
            ->scalar('DateDone')
            ->maxLength('DateDone', 10)
            ->allowEmpty('DateDone');

        return $validator;
    }
}
