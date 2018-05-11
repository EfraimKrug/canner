<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CannerDone Entity
 *
 * @property int $CannerID
 * @property int $OwnerID
 * @property string $DateDone
 */
class CannerDone extends Entity
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
        'DateDone' => true
    ];
}
