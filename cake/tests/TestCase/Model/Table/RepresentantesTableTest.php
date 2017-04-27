<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepresentantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepresentantesTable Test Case
 */
class RepresentantesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepresentantesTable
     */
    public $Representantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.representantes',
        'app.estados',
        'app.celulars',
        'app.celulars_representantes',
        'app.emails',
        'app.emails_representantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Representantes') ? [] : ['className' => 'App\Model\Table\RepresentantesTable'];
        $this->Representantes = TableRegistry::get('Representantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Representantes);

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
