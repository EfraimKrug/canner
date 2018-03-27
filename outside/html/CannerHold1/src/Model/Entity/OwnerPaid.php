<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OwnerPaid Entity
 *
 * @property int $ID
 * @property int $OwnerID
 * @property float $Amount
 * @property string $DatePaid
 */
class OwnerPaid extends Entity
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
        'OwnerID' => true,
        'Amount' => true,
        'DatePaid' => true
    ];
}