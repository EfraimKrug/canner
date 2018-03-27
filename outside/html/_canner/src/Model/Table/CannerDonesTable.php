<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CannerDones Model
 *
 * @property \App\Model\Table\CannersTable|\Cake\ORM\Association\BelongsTo $Canners
 * @property \App\Model\Table\OwnersTable|\Cake\ORM\Association\BelongsTo $Owners
 *
 * @method \App\Model\Entity\CannerDone get($primaryKey, $options = [])
 * @method \App\Model\Entity\CannerDone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CannerDone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CannerDone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CannerDone findOrCreate($search, callable $callback = null, $options = [])
 */
class CannerDonesTable extends Table
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

        $this->setTable('canner_dones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Canners', [
            'foreignKey' => 'canner_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id',
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
            ->dateTime('date_done')
            ->allowEmpty('date_done');

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
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));

        return $rules;
    }
}
