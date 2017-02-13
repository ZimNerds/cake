<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferencesTable Test Case
 */
class ReferencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferencesTable
     */
    public $References;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.references',
        'app.tenants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('References') ? [] : ['className' => 'App\Model\Table\ReferencesTable'];
        $this->References = TableRegistry::get('References', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->References);

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
