<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Owner Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $start_date
 * @property string $address
 * @property string $state
 * @property string $country
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CannerDone[] $canner_dones
 * @property \App\Model\Entity\CannerTodo[] $canner_todos
 * @property \App\Model\Entity\OwnerContract[] $owner_contracts
 * @property \App\Model\Entity\OwnerDone[] $owner_dones
 * @property \App\Model\Entity\OwnerPayment[] $owner_payments
 */
class Owner extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'start_date' => true,
        'address' => true,
        'state' => true,
        'country' => true,
        'user' => true,
        'canner_dones' => true,
        'canner_todos' => true,
        'owner_contracts' => true,
        'owner_dones' => true,
        'owner_payments' => true
    ];
}
