<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CannerDonesFixture
 *
 */
class CannerDonesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'canner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'owner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_done' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'canner_key' => ['type' => 'index', 'columns' => ['canner_id'], 'length' => []],
            'owner_key' => ['type' => 'index', 'columns' => ['owner_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'canner_dones_ibfk_1' => ['type' => 'foreign', 'columns' => ['canner_id'], 'references' => ['canners', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'canner_dones_ibfk_2' => ['type' => 'foreign', 'columns' => ['owner_id'], 'references' => ['owners', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id' => 1,
            'canner_id' => 1,
            'owner_id' => 1,
            'date_done' => '2018-01-07 16:15:26'
        ],
    ];
}
