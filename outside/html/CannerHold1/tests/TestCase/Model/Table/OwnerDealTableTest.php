<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OwnerDealTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OwnerDealTable Test Case
 */
class OwnerDealTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OwnerDealTable
     */
    public $OwnerDeal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.owner_deal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OwnerDeal') ? [] : ['className' => OwnerDealTable::class];
        $this->OwnerDeal = TableRegistry::get('OwnerDeal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OwnerDeal);

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
