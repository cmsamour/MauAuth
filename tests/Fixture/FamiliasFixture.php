<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FamiliasFixture
 */
class FamiliasFixture extends TestFixture
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
                'created' => 1647707552,
                'modified' => 1647707552,
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
