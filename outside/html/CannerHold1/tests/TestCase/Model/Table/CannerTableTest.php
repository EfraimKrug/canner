<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CannerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CannerTable Test Case
 */
class CannerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CannerTable
     */
    public $Canner;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.canner'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Canner') ? [] : ['className' => CannerTable::class];
        $this->Canner = TableRegistry::get('Canner', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Canner);

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
