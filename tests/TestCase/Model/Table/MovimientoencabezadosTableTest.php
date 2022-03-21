<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimientoencabezadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimientoencabezadosTable Test Case
 */
class MovimientoencabezadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimientoencabezadosTable
     */
    protected $Movimientoencabezados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Movimientoencabezados',
        'app.Proveedors',
        'app.Tipomovimientos',
        'app.Turnos',
        'app.Users',
        'app.Movimientodetalles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Movimientoencabezados') ? [] : ['className' => MovimientoencabezadosTable::class];
        $this->Movimientoencabezados = $this->getTableLocator()->get('Movimientoencabezados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Movimientoencabezados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MovimientoencabezadosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MovimientoencabezadosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
