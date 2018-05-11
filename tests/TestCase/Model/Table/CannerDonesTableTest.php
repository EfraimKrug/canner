<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerDonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerDonesTable Test Case
 */
class CannerDonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerDonesTable
     */
    public $CannerDones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_dones',
        'app.canners',
        'app.users',
        'app.owners',
        'app.canner_todos',
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
        $config = TableRegistry::exists('CannerDones') ? [] : ['className' => CannerDonesTable::class];
        $this->CannerDones = TableRegistry::get('CannerDones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerDones);

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
