<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OwnerDealFixture
 *
 */
class OwnerDealFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'owner_deal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'OwnerID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PayDay' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PayAmount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PreviousPayAmount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'DateChanged' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Notes' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['OwnerID', 'DateChanged'], 'length' => []],
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
            'OwnerID' => 1,
            'PayDay' => 1,
            'PayAmount' => 1.5,
            'PreviousPayAmount' => 1.5,
            'DateChanged' => '6a85cdde-6e10-4ee9-8ca3-3485e92f10e0',
            'Notes' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
