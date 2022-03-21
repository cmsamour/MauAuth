<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movimientoencabezado Entity
 *
 * @property int $id
 * @property int $proveedor_id
 * @property int $tipomovimiento_id
 * @property int $turno_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Proveedor $proveedor
 * @property \App\Model\Entity\Tipomovimiento $tipomovimiento
 * @property \App\Model\Entity\Turno $turno
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Movimientodetalle[] $movimientodetalles
 */
class Movimientoencabezado extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'proveedor_id' => true,
        'tipomovimiento_id' => true,
        'turno_id' => true,
        'fecha' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'proveedor' => true,
        'tipomovimiento' => true,
        'turno' => true,
        'user' => true,
        'movimientodetalles' => true,
    ];
}
