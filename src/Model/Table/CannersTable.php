<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Canners Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CannerContractsTable|\Cake\ORM\Association\HasMany $CannerContracts
 * @property \App\Model\Table\CannerDonesTable|\Cake\ORM\Association\HasMany $CannerDones
 * @property \App\Model\Table\CannerPaymentsTable|\Cake\ORM\Association\HasMany $CannerPayments
 * @property \App\Model\Table\CannerTodosTable|\Cake\ORM\Association\HasMany $CannerTodos
 * @property \App\Model\Table\OwnerDonesTable|\Cake\ORM\Association\HasMany $OwnerDones
 *
 * @method \App\Model\Entity\Canner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Canner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Canner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Canner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Canner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Canner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Canner findOrCreate($search, callable $callback = null, $options = [])
 */
class CannersTable extends Table
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

        $this->setTable('canners');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CannerContracts', [
            'foreignKey' => 'canner_id'
        ]);
        $this->hasMany('CannerDones', [
            'foreignKey' => 'canner_id'
        ]);
        $this->hasMany('CannerPayments', [
            'foreignKey' => 'canner_id'
        ]);
        $this->hasMany('CannerTodos', [
            'foreignKey' => 'canner_id'
        ]);
        $this->hasMany('OwnerDones', [
            'foreignKey' => 'canner_id'
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
            ->scalar('first_name')
            ->maxLength('first_name', 20)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 20)
            ->allowEmpty('last_name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->dateTime('start_date')
            ->allowEmpty('start_date');

        $validator
            ->scalar('address')
            ->maxLength('address', 30)
            ->allowEmpty('address');

        $validator
            ->scalar('state')
            ->maxLength('state', 15)
            ->allowEmpty('state');

        $validator
            ->scalar('country')
            ->maxLength('country', 25)
            ->allowEmpty('country');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
