<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimientodetallesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimientodetallesTable Test Case
 */
class MovimientodetallesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimientodetallesTable
     */
    protected $Movimientodetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Movimientodetalles',
        'app.Movimientoencabezados',
        'app.Productos',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Movimientodetalles') ? [] : ['className' => MovimientodetallesTable::class];
        $this->Movimientodetalles = $this->getTableLocator()->get('Movimientodetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Movimientodetalles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MovimientodetallesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MovimientodetallesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
