<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Owner Entity
 *
 * @property int $ID
 * @property string $FName
 * @property string $LName
 * @property string $EMail
 * @property string $StartDate
 * @property string $Address
 * @property string $State
 * @property string $Country
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
        'FName' => true,
        'LName' => true,
        'EMail' => true,
        'StartDate' => true,
        'Address' => true,
        'State' => true,
        'Country' => true
    ];
}
