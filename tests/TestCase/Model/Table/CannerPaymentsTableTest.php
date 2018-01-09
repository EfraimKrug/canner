<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerPaymentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerPaymentsTable Test Case
 */
class CannerPaymentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerPaymentsTable
     */
    public $CannerPayments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_payments',
        'app.canners',
        'app.users',
        'app.owners',
        'app.canner_dones',
        'app.canner_todos',
        'app.owner_contracts',
        'app.owner_dones',
        'app.owner_payments',
        'app.canner_contracts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerPayments') ? [] : ['className' => CannerPaymentsTable::class];
        $this->CannerPayments = TableRegistry::get('CannerPayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerPayments);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
