<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedorsTable Test Case
 */
class ProveedorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedorsTable
     */
    protected $Proveedors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Proveedors',
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
        $config = $this->getTableLocator()->exists('Proveedors') ? [] : ['className' => ProveedorsTable::class];
        $this->Proveedors = $this->getTableLocator()->get('Proveedors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Proveedors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProveedorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProveedorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
