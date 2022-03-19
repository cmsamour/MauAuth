<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property int $medida_id
 * @property int $familia_id
 * @property string $nombre
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\Medida $medida
 * @property \App\Model\Entity\Familia $familia
 * @property \App\Model\Entity\User $user
 */
class Producto extends Entity
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
        'medida_id' => true,
        'familia_id' => true,
        'nombre' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'medida' => true,
        'familia' => true,
        'user' => true,
    ];
}
