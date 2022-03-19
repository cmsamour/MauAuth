<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medida Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property bool $activo
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Producto[] $productos
 */
class Medida extends Entity
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
        'nombre' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'activo' => true,
        'user' => true,
        'productos' => true,
    ];
}
