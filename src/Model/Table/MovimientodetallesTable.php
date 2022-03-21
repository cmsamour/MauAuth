<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientodetalles Model
 *
 * @property \App\Model\Table\MovimientoencabezadosTable&\Cake\ORM\Association\BelongsTo $Movimientoencabezados
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Movimientodetalle newEmptyEntity()
 * @method \App\Model\Entity\Movimientodetalle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Movimientodetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimientodetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimientodetalle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Movimientodetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimientodetalle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimientodetalle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimientodetalle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimientodetalle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientodetalle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientodetalle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientodetalle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MovimientodetallesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('movimientodetalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Movimientoencabezados', [
            'foreignKey' => 'movimientoencabezado_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->decimal('pbruto')
            ->requirePresence('pbruto', 'create')
            ->notEmptyString('pbruto');

        $validator
            ->decimal('tara')
            ->requirePresence('tara', 'create')
            ->notEmptyString('tara');

        $validator
            ->decimal('pneto')
            ->requirePresence('pneto', 'create')
            ->notEmptyString('pneto');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('movimientoencabezado_id', 'Movimientoencabezados'), ['errorField' => 'movimientoencabezado_id']);
        $rules->add($rules->existsIn('producto_id', 'Productos'), ['errorField' => 'producto_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
