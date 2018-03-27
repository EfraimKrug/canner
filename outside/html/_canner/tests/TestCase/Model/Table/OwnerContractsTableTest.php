<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerContractsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerContractsTable Test Case
 */
class OwnerContractsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerContractsTable
     */
    public $OwnerContracts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_contracts',
        'app.owners',
        'app.users',
        'app.canners',
        'app.canner_contracts',
        'app.canner_dones',
        'app.canner_payments',
        'app.canner_todos',
        'app.owner_dones',
        'app.owner_payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OwnerContracts') ? [] : ['className' => OwnerContractsTable::class];
        $this->OwnerContracts = TableRegistry::get('OwnerContracts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerContracts);

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
