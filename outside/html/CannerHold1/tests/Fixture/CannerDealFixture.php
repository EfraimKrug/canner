<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CannerDealFixture
 *
 */
class CannerDealFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'canner_deal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'CannerID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PayDay' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PayAmount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PreviousPayAmount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'DateChanged' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['CannerID', 'DateChanged'], 'length' => []],
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
            'CannerID' => 1,
            'PayDay' => 1,
            'PayAmount' => 1.5,
            'PreviousPayAmount' => 1.5,
            'DateChanged' => '1c1c5231-1411-4ed1-80fb-e7e9176cf41d'
        ],
    ];
}
