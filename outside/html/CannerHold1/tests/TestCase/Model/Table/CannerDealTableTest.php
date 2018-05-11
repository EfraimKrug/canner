<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerDealTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerDealTable Test Case
 */
class CannerDealTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerDealTable
     */
    public $CannerDeal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner_deal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CannerDeal') ? [] : ['className' => CannerDealTable::class];
        $this->CannerDeal = TableRegistry::get('CannerDeal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CannerDeal);

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
