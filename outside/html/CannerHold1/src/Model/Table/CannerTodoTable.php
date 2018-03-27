<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerTodo Model
 *
 * @method \App\Model\Entity\CannerTodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerTodo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerTodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerTodo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerTodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerTodo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerTodo findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerTodoTable extends Table
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

        $this->setTable('canner_todo');
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

        return $validator;
    }
}
