<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorsFixture
 */
class ProveedorsFixture extends TestFixture
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
                'created' => 1647892343,
                'modified' => 1647892343,
                'user_id' => 1,
                'activo' => 1,
            ],
        ];
        parent::init();
    }
}
