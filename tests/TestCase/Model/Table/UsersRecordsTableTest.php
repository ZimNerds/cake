<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersRecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersRecordsTable Test Case
 */
class UsersRecordsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersRecordsTable
     */
    public $UsersRecords;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_records',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.members',
        'app.groups_permissions',
        'app.records'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersRecords') ? [] : ['className' => 'App\Model\Table\UsersRecordsTable'];
        $this->UsersRecords = TableRegistry::get('UsersRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersRecords);

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
