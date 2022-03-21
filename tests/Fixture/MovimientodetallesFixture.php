<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientodetallesFixture
 */
class MovimientodetallesFixture extends TestFixture
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
                'movimientoencabezado_id' => 1,
                'producto_id' => 1,
                'pbruto' => 1.5,
                'tara' => 1.5,
                'pneto' => 1.5,
                'created' => 1647892401,
                'modified' => 1647892401,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
