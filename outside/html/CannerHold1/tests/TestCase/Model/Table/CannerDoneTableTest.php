<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerDoneTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerDoneTable Test Case
 */
class CannerDoneTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerDoneTable
     */
    public $CannerDone;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_done'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerDone') ? [] : ['className' => CannerDoneTable::class];
        $this->CannerDone = TableRegistry::get('CannerDone', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerDone);

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
