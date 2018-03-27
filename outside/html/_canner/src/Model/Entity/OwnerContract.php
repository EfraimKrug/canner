<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OwnerContract Entity
 *
 * @property int $owner_id
 * @property int $pay_day
 * @property float $pay_amount
 * @property float $previous_pay_amount
 * @property \Cake\I18n\FrozenTime $date_changed
 * @property string $notes
 *
 * @property \App\Model\Entity\Owner $owner
 */
class OwnerContract extends Entity
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
        'pay_day' => true,
        'pay_amount' => true,
        'previous_pay_amount' => true,
        'notes' => true,
        'owner' => true
    ];
}
