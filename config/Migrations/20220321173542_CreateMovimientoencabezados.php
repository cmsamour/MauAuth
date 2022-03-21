<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMovimientoencabezados extends AbstractMigration
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
        $table = $this->table('movimientoencabezados');

        $table->addColumn('proveedor_id', 'integer', [
            'limit' => 5,
            'null' => false,
	    ]);
        $table->addColumn('tipomovimiento_id', 'integer', [
            'limit' => 5,
            'null' => false,
	    ]);
        $table->addColumn('turno_id', 'integer', [
            'limit' => 5,
            'null' => false,
	    ]);
        $table->addColumn('fecha', 'date', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
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
        $table->addPrimaryKey("id");

        $table->addIndex([

            'fecha',

            ], [
            'name' => 'FECHA',
            
            ]);


        //Llaves foraneas van aca.
        $table->addForeignKey('user_id', 'users', ['id'],
                            ['constraint'=>'fk_user_movimientoencabezado']);
        $table->addForeignKey('turno_id', 'turnos', ['id'],
                            ['constraint'=>'fk_turno_movimientoencabezado']); 
        $table->addForeignKey('tipomovimiento_id', 'tipomovimientos', ['id'],
                            ['constraint'=>'fk_tipomovimiento_movimientoencabezado']);
        $table->addForeignKey('proveedor_id', 'proveedors', ['id'],
                            ['constraint'=>'fk_proveedor_movimientoencabezado']); 


        $table->create();
    }
}
