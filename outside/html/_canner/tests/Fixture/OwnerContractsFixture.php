<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OwnerContractsFixture
 *
 */
class OwnerContractsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'owner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pay_day' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pay_amount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'previous_pay_amount' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'date_changed' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'notes' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['owner_id', 'date_changed'], 'length' => []],
            'owner_contracts_ibfk_1' => ['type' => 'foreign', 'columns' => ['owner_id'], 'references' => ['owners', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'pay_day' => 1,
            'pay_amount' => 1.5,
            'previous_pay_amount' => 1.5,
            'date_changed' => '2018-01-07 16:15:50',
            'notes' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
