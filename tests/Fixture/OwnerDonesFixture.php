<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OwnerDonesFixture
 *
 */
class OwnerDonesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'owner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'canner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_done' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'canner_key' => ['type' => 'index', 'columns' => ['canner_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['owner_id', 'date_done'], 'length' => []],
            'owner_dones_ibfk_1' => ['type' => 'foreign', 'columns' => ['canner_id'], 'references' => ['canners', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'owner_dones_ibfk_2' => ['type' => 'foreign', 'columns' => ['owner_id'], 'references' => ['owners', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'owner_id' => 1,
            'canner_id' => 1,
            'date_done' => '2018-01-08 01:08:50'
        ],
    ];
}
