<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipomovimientosFixture
 */
class TipomovimientosFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'espositivo' => 1,
                'created' => 1647892356,
                'modified' => 1647892356,
                'user_id' => 1,
                'activo' => 1,
            ],
        ];
        parent::init();
    }
}
