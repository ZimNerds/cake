<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnitsTable Test Case
 */
class UnitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UnitsTable
     */
    public $Units;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.units',
        'app.properties',
        'app.countries',
        'app.owners',
        'app.cities',
        'app.states',
        'app.employment',
        'app.tenants',
        'app.applications',
        'app.types',
        'app.references',
        'app.rental_history'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Units') ? [] : ['className' => 'App\Model\Table\UnitsTable'];
        $this->Units = TableRegistry::get('Units', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Units);

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
