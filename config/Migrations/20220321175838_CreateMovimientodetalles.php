<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMovimientodetalles extends AbstractMigration
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
        $table = $this->table('movimientodetalles');

        $table->addColumn('movimientoencabezado_id', 'integer', [
            'limit' => 5,
            'null' => false,
	    ]);
        $table->addColumn('producto_id', 'integer', [
            'limit' => 5,
            'null' => false,
	    ]);
        $table->addColumn('pbruto', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 5,
            'scale' => 2,
        ]);
        $table->addColumn('tara', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 5,
            'scale' => 2,
        ]);
        $table->addColumn('pneto', 'decimal', [
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

        $table->addPrimaryKey("id");

        $table->addIndex([

            'pneto',

            ], [
            'name' => 'PNETO',
            
            ]);
            $table->addIndex([

                'pbruto',
    
                ], [
                'name' => 'PBRUTO',
                
            ]);
            $table->addIndex([

                'tara',
        
                ], [
                    'name' => 'TARA',
                    
            ]);
        //$table->addForeignKey('user_id', 'users', ['id'],
          //                  ['constraint'=>'fk_user_movimientodetalle']);
        
        //$table->addForeignKey('producto_id', 'prodcutos', ['id'],
         //                   ['constraint'=>'fk_producto_movimientodetalle']);

        //$table->addForeignKey('movimientoencabezado_id', 'movimientoencabezados', ['id'],
        //                    ['constraint'=>'fk_movimientoencabezado_movimientodetalle']);            
        $table->addForeignKey('user_id', 'users', ['id'],
                            ['constraint'=>'fk_user_movimientodetalle']);
        $table->addForeignKey('producto_id', 'productoss', ['id'],
                            ['constraint'=>'fk_producto_movimientodetalle']);
        $table->addForeignKey('movimientoencabezado_id', 'movimientoencabezados', ['id'],
                            ['constraint'=>'fk_movimientoencabezado_movimientodetalle']);
        

        $table->create();
    }
}
