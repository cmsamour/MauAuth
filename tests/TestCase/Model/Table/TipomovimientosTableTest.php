<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipomovimientosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipomovimientosTable Test Case
 */
class TipomovimientosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipomovimientosTable
     */
    protected $Tipomovimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tipomovimientos',
        'app.Users',
        'app.Movimientoencabezados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipomovimientos') ? [] : ['className' => TipomovimientosTable::class];
        $this->Tipomovimientos = $this->getTableLocator()->get('Tipomovimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tipomovimientos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipomovimientosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TipomovimientosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
