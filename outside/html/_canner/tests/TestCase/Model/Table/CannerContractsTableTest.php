<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerContractsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerContractsTable Test Case
 */
class CannerContractsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerContractsTable
     */
    public $CannerContracts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_contracts',
        'app.canners',
        'app.users',
        'app.owners',
        'app.canner_dones',
        'app.canner_todos',
        'app.owner_contracts',
        'app.owner_dones',
        'app.owner_payments',
        'app.canner_payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerContracts') ? [] : ['className' => CannerContractsTable::class];
        $this->CannerContracts = TableRegistry::get('CannerContracts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerContracts);

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
