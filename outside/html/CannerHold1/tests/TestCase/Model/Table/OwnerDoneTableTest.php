<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerDoneTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerDoneTable Test Case
 */
class OwnerDoneTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerDoneTable
     */
    public $OwnerDone;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_done'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OwnerDone') ? [] : ['className' => OwnerDoneTable::class];
        $this->OwnerDone = TableRegistry::get('OwnerDone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerDone);

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
