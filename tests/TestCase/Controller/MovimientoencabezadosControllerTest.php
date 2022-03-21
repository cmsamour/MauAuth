<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MovimientoencabezadosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MovimientoencabezadosController Test Case
 *
 * @uses \App\Controller\MovimientoencabezadosController
 */
class MovimientoencabezadosControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\MovimientoencabezadosController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\MovimientoencabezadosController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\MovimientoencabezadosController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\MovimientoencabezadosController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\MovimientoencabezadosController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
