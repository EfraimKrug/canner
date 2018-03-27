<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OwnerPayment Entity
 *
 * @property int $id
 * @property int $owner_id
 * @property float $amount
 * @property \Cake\I18n\FrozenTime $date_paid
 *
 * @property \App\Model\Entity\Owner $owner
 */
class OwnerPayment extends Entity
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
        'owner_id' => true,
        'amount' => true,
        'date_paid' => true,
        'owner' => true
    ];
}
