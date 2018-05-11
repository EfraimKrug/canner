<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerDonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerDonesTable Test Case
 */
class OwnerDonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerDonesTable
     */
    public $OwnerDones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_dones',
        'app.owners',
        'app.users',
        'app.canners',
        'app.canner_contracts',
        'app.canner_dones',
        'app.canner_payments',
        'app.canner_todos',
        'app.owner_contracts',
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
        $config = TableRegistry::exists('OwnerDones') ? [] : ['className' => OwnerDonesTable::class];
        $this->OwnerDones = TableRegistry::get('OwnerDones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerDones);

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
