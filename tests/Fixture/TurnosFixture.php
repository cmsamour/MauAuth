<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurnosFixture
 */
class TurnosFixture extends TestFixture
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
                'horainicial' => 1647892325,
                'horafinal' => 1647892325,
                'created' => 1647892325,
                'modified' => 1647892325,
                'user_id' => 1,
                'activo' => 1,
            ],
        ];
        parent::init();
    }
}
