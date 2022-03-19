<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedidasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedidasTable Test Case
 */
class MedidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedidasTable
     */
    protected $Medidas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Medidas',
        'app.Users',
        'app.Productos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Medidas') ? [] : ['className' => MedidasTable::class];
        $this->Medidas = $this->getTableLocator()->get('Medidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Medidas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MedidasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MedidasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
