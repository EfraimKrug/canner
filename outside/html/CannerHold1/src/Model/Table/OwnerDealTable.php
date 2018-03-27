<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerDeal Model
 *
 * @method \App\Model\Entity\OwnerDeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerDeal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerDeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDeal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerDeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDeal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDeal findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnerDealTable extends Table
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

        $this->setTable('owner_deal');
        $this->setDisplayField('OwnerID');
        $this->setPrimaryKey(['OwnerID', 'DateChanged']);
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
            ->integer('PayDay')
            ->requirePresence('PayDay', 'create')
            ->notEmpty('PayDay');

        $validator
            ->decimal('PayAmount')
            ->allowEmpty('PayAmount');

        $validator
            ->decimal('PreviousPayAmount')
            ->allowEmpty('PreviousPayAmount');

        $validator
            ->scalar('DateChanged')
            ->maxLength('DateChanged', 10)
            ->allowEmpty('DateChanged', 'create');

        $validator
            ->scalar('Notes')
            ->maxLength('Notes', 200)
            ->allowEmpty('Notes');

        return $validator;
    }
}
