<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OwnerDones Model
 *
 * @property \App\Model\Table\OwnersTable|\Cake\ORM\Association\BelongsTo $Owners
 * @property \App\Model\Table\CannersTable|\Cake\ORM\Association\BelongsTo $Canners
 *
 * @method \App\Model\Entity\OwnerDone get($primaryKey, $options = [])
 * @method \App\Model\Entity\OwnerDone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OwnerDone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OwnerDone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OwnerDone findOrCreate($search, callable $callback = null, $options = [])
 */
class OwnerDonesTable extends Table
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

        $this->setTable('owner_dones');
        $this->setDisplayField('owner_id');
        $this->setPrimaryKey(['owner_id', 'date_done']);

        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id',
            'joinType' => 'INNER'
        ]);
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
            ->dateTime('date_done')
            ->allowEmpty('date_done', 'create');

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
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));
        $rules->add($rules->existsIn(['canner_id'], 'Canners'));

        return $rules;
    }
}
