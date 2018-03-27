<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerTable Test Case
 */
class OwnerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerTable
     */
    public $Owner;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Owner') ? [] : ['className' => OwnerTable::class];
        $this->Owner = TableRegistry::get('Owner', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Owner);

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
