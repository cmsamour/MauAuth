<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movimientodetalle Entity
 *
 * @property int $id
 * @property int $movimientoencabezado_id
 * @property int $producto_id
 * @property string $pbruto
 * @property string $tara
 * @property string $pneto
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Movimientoencabezado $movimientoencabezado
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\User $user
 */
class Movimientodetalle extends Entity
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
        'movimientoencabezado_id' => true,
        'producto_id' => true,
        'pbruto' => true,
        'tara' => true,
        'pneto' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'movimientoencabezado' => true,
        'producto' => true,
        'user' => true,
    ];
}
