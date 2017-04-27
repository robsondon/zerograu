<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImgprodutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImgprodutosTable Test Case
 */
class ImgprodutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImgprodutosTable
     */
    public $Imgprodutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imgprodutos',
        'app.produtos',
        'app.subcategorias',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imgprodutos') ? [] : ['className' => 'App\Model\Table\ImgprodutosTable'];
        $this->Imgprodutos = TableRegistry::get('Imgprodutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imgprodutos);

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
