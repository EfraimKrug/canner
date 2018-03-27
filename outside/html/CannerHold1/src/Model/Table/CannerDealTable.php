<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerDeal Model
 *
 * @method \App\Model\Entity\CannerDeal get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerDeal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerDeal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerDeal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerDeal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDeal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDeal findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerDealTable extends Table
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

        $this->setTable('canner_deal');
        $this->setDisplayField('CannerID');
        $this->setPrimaryKey(['CannerID', 'DateChanged']);
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

        return $validator;
    }
}
