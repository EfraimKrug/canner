<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerPaidTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerPaidTable Test Case
 */
class OwnerPaidTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerPaidTable
     */
    public $OwnerPaid;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_paid'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OwnerPaid') ? [] : ['className' => OwnerPaidTable::class];
        $this->OwnerPaid = TableRegistry::get('OwnerPaid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerPaid);

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
