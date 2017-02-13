<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmploymentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmploymentTable Test Case
 */
class EmploymentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmploymentTable
     */
    public $Employment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employment',
        'app.tenants',
        'app.cities',
        'app.states',
        'app.owners',
        'app.properties',
        'app.units'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Employment') ? [] : ['className' => 'App\Model\Table\EmploymentTable'];
        $this->Employment = TableRegistry::get('Employment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employment);

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
