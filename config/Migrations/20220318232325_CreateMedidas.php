<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMedidas extends AbstractMigration
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
        $table = $this->table('medidas');

	$table->addColumn('nombre', 'string', [
            'limit' => 120,
            'null' => false,
	]);
	$table->addColumn('price', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 5,
            'scale' => 2,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'limit' => 5,
            'null' => false,
	]);
	$table->addColumn('activo', 'boolean', [
            'null' => false,
        ]);


        //$table->addPrimaryKey("id");
        $table->addIndex([

            'nombre',

            ], [
            'name' => 'UNIQUE_NOMBRE',
            'unique' => true,
            ]);
        //$table->addForeignKey('user_id', 'users', ['id'],
         //                   ['constraint'=>'fk_user']);

        //$table->addForeignKey('user_id','users','id');




	$table->create();
    }
}
