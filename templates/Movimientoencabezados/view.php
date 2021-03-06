<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientoencabezado $movimientoencabezado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('MENU MOVIMIENTOS') ?></h4>
            <?= $this->Html->link(__('REGRESAR'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('MODIFICAR'), ['action' => 'edit', $movimientoencabezado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('ELIMINAR'), ['action' => 'delete', $movimientoencabezado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezado->id), 'class' => 'side-nav-item']) ?>
            
            <?= $this->Html->link(__('CREAR'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientoencabezados view content">
            <h3><?= h('Numero de Movimiento: '.$movimientoencabezado->id) ?></h3>
            <table>
            <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($movimientoencabezado->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proveedor') ?></th>
                    <td><?= $movimientoencabezado->has('proveedor') ? $this->Html->link($movimientoencabezado->proveedor->nombre, ['controller' => 'Proveedors', 'action' => 'view', $movimientoencabezado->proveedor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipomovimiento') ?></th>
                    <td><?= $movimientoencabezado->has('tipomovimiento') ? $this->Html->link($movimientoencabezado->tipomovimiento->nombre, ['controller' => 'Tipomovimientos', 'action' => 'view', $movimientoencabezado->tipomovimiento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= $movimientoencabezado->has('turno') ? $this->Html->link($movimientoencabezado->turno->nombre, ['controller' => 'Turnos', 'action' => 'view', $movimientoencabezado->turno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $movimientoencabezado->has('user') ? $this->Html->link($movimientoencabezado->user->email, ['controller' => 'Users', 'action' => 'view', $movimientoencabezado->user->id]) : '' ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($movimientoencabezado->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($movimientoencabezado->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('PRODUCTOS EN ESTA LISTA') ?></h4>
                
                <?php if (!empty($movimientoencabezado->movimientodetalles)) : ?>
                    <?= $this->Html->link(__('AGREGAR VI??ETA'), ['controller' => 'Movimientodetalles', 'action' => 'add', $movimientoencabezado->id]) ?>
                <div class="table-responsive">
                
                    <table>
                        <tr>
                            <th><?= __('VINETA') ?></th>
                            <th><?= __('PRODUCTO') ?></th>
                           <?php //Aca va el pbruto y el tara?>
                            <th><?= __('CANTIDAD') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                           
                        </tr>
                        <?php $count = 0;?>
                        <?php foreach ($movimientoencabezado->movimientodetalles as $movimientodetalles) : ?>
                            
                            <tr>
                            <td><?= h($movimientodetalles->id) ?></td>
                            <td><?= h($movimientodetalles->producto->nombre) ?></td>
                            <td><?= h($movimientodetalles->pneto) ?></td>
                            <td><?= h($movimientodetalles->created) ?></td>
                            <td><?= h($movimientodetalles->modified) ?></td>
                            <td><?= h($movimientodetalles->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('VER'), ['controller' => 'Movimientodetalles', 'action' => 'view', $movimientodetalles->id]) ?>
                                <?= $this->Html->link(__('MODIFICAR'), ['controller' => 'Movimientodetalles', 'action' => 'edit', $movimientodetalles->id]) ?>
                                <?= $this->Form->postLink(__('BORRAR'), ['controller' => 'Movimientodetalles', 'action' => 'delete', $movimientodetalles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientodetalles->id)]) ?>
                            </td>
                           
                        </tr>
                         <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
                <?= $this->Html->link(__('AGREGAR VI??ETA'), ['controller' => 'Movimientodetalles', 'action' => 'add', $movimientoencabezado->id]) ?>
            </div>
        </div>
    </div>
</div>
