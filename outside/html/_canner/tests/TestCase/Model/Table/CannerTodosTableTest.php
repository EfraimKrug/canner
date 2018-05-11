<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerTodosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerTodosTable Test Case
 */
class CannerTodosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerTodosTable
     */
    public $CannerTodos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_todos',
        'app.canners',
        'app.users',
        'app.owners',
        'app.canner_dones',
        'app.owner_contracts',
        'app.owner_dones',
        'app.owner_payments',
        'app.canner_contracts',
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
        $config = TableRegistry::exists('CannerTodos') ? [] : ['className' => CannerTodosTable::class];
        $this->CannerTodos = TableRegistry::get('CannerTodos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerTodos);

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
