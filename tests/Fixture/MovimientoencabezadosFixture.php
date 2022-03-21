<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientoencabezadosFixture
 */
class MovimientoencabezadosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'proveedor_id' => 1,
                'tipomovimiento_id' => 1,
                'turno_id' => 1,
                'fecha' => '2022-03-21',
                'created' => 1647892386,
                'modified' => 1647892386,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
