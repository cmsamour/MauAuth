<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateStudents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
	   
	$table = $this->table('students');
	
	$table->addColumn('name', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
	$table->addColumn('phone_no', 'string', [
            'limit' => 30,
            'null' => false,
        ]);

        $table->addColumn('status', 'enum', [
            'values' => [1, 0],
            'default' => 1
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
	]);
	$table->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);

        $table->create();
    }
}
