<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerPaidTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerPaidTable Test Case
 */
class CannerPaidTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerPaidTable
     */
    public $CannerPaid;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_paid'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerPaid') ? [] : ['className' => CannerPaidTable::class];
        $this->CannerPaid = TableRegistry::get('CannerPaid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerPaid);

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
