<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedidasFixture
 */
class MedidasFixture extends TestFixture
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
                'price' => 1.5,
                'created' => 1647700682,
                'modified' => 1647700682,
                'user_id' => 1,
                'activo' => 1,
            ],
        ];
        parent::init();
    }
}
