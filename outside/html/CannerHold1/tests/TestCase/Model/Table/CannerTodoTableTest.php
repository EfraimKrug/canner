<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerTodoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerTodoTable Test Case
 */
class CannerTodoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerTodoTable
     */
    public $CannerTodo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_todo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerTodo') ? [] : ['className' => CannerTodoTable::class];
        $this->CannerTodo = TableRegistry::get('CannerTodo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerTodo);

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
}
