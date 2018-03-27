<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannersTable Test Case
 */
class CannersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannersTable
     */
    public $Canners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canners',
        'app.users',
        'app.owners',
        'app.canner_contracts',
        'app.canner_dones',
        'app.canner_payments',
        'app.canner_todos',
        'app.owner_dones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Canners') ? [] : ['className' => CannersTable::class];
        $this->Canners = TableRegistry::get('Canners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Canners);

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
