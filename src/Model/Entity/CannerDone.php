<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CannerDone Entity
 *
 * @property int $id
 * @property int $canner_id
 * @property int $owner_id
 * @property \Cake\I18n\FrozenTime $date_done
 *
 * @property \App\Model\Entity\Canner $canner
 * @property \App\Model\Entity\Owner $owner
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
        'canner_id' => true,
        'owner_id' => true,
        'date_done' => true,
        'canner' => true,
        'owner' => true
    ];
}
