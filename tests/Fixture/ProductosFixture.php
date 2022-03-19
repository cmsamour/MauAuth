<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
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
                'medida_id' => 1,
                'familia_id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'created' => 1647707559,
                'modified' => 1647707559,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
