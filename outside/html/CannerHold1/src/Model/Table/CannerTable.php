<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Canner Model
 *
 * @method \App\Model\Entity\Canner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Canner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Canner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Canner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Canner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Canner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Canner findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerTable extends Table
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

        $this->setTable('canner');
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
            ->scalar('FName')
            ->maxLength('FName', 20)
            ->allowEmpty('FName');

        $validator
            ->scalar('LName')
            ->maxLength('LName', 20)
            ->allowEmpty('LName');

        $validator
            ->scalar('EMail')
            ->maxLength('EMail', 50)
            ->allowEmpty('EMail');

        $validator
            ->scalar('StartDate')
            ->maxLength('StartDate', 10)
            ->allowEmpty('StartDate');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 30)
            ->allowEmpty('Address');

        $validator
            ->scalar('State')
            ->maxLength('State', 15)
            ->allowEmpty('State');

        $validator
            ->scalar('Country')
            ->maxLength('Country', 25)
            ->allowEmpty('Country');

        return $validator;
    }
}
