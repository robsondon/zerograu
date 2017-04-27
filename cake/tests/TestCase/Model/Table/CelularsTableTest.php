<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CelularsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CelularsTable Test Case
 */
class CelularsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CelularsTable
     */
    public $Celulars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.celulars',
        'app.representantes',
        'app.estados',
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
        $config = TableRegistry::exists('Celulars') ? [] : ['className' => 'App\Model\Table\CelularsTable'];
        $this->Celulars = TableRegistry::get('Celulars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Celulars);

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
