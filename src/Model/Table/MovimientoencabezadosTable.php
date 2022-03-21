<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientoencabezados Model
 *
 * @property \App\Model\Table\ProveedorsTable&\Cake\ORM\Association\BelongsTo $Proveedors
 * @property \App\Model\Table\TipomovimientosTable&\Cake\ORM\Association\BelongsTo $Tipomovimientos
 * @property \App\Model\Table\TurnosTable&\Cake\ORM\Association\BelongsTo $Turnos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MovimientodetallesTable&\Cake\ORM\Association\HasMany $Movimientodetalles
 *
 * @method \App\Model\Entity\Movimientoencabezado newEmptyEntity()
 * @method \App\Model\Entity\Movimientoencabezado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimientoencabezado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimientoencabezado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimientoencabezado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MovimientoencabezadosTable extends Table
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

        $this->setTable('movimientoencabezados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proveedors', [
            'foreignKey' => 'proveedor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tipomovimientos', [
            'foreignKey' => 'tipomovimiento_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Turnos', [
            'foreignKey' => 'turno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Movimientodetalles', [
            'foreignKey' => 'movimientoencabezado_id',
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
            ->date('fecha')
            ->notEmptyDate('fecha');

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
        $rules->add($rules->existsIn('proveedor_id', 'Proveedors'), ['errorField' => 'proveedor_id']);
        $rules->add($rules->existsIn('tipomovimiento_id', 'Tipomovimientos'), ['errorField' => 'tipomovimiento_id']);
        $rules->add($rules->existsIn('turno_id', 'Turnos'), ['errorField' => 'turno_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
