<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CannerTodosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CannerTodosController Test Case
 */
class CannerTodosControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
