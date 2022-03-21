<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientoencabezado $movimientoencabezado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movimientoencabezado'), ['action' => 'edit', $movimientoencabezado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movimientoencabezado'), ['action' => 'delete', $movimientoencabezado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movimientoencabezados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movimientoencabezado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientoencabezados view content">
            <h3><?= h($movimientoencabezado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Proveedor') ?></th>
                    <td><?= $movimientoencabezado->has('proveedor') ? $this->Html->link($movimientoencabezado->proveedor->id, ['controller' => 'Proveedors', 'action' => 'view', $movimientoencabezado->proveedor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipomovimiento') ?></th>
                    <td><?= $movimientoencabezado->has('tipomovimiento') ? $this->Html->link($movimientoencabezado->tipomovimiento->id, ['controller' => 'Tipomovimientos', 'action' => 'view', $movimientoencabezado->tipomovimiento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= $movimientoencabezado->has('turno') ? $this->Html->link($movimientoencabezado->turno->id, ['controller' => 'Turnos', 'action' => 'view', $movimientoencabezado->turno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $movimientoencabezado->has('user') ? $this->Html->link($movimientoencabezado->user->email, ['controller' => 'Users', 'action' => 'view', $movimientoencabezado->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movimientoencabezado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($movimientoencabezado->fecha) ?></td>
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
                <h4><?= __('Related Movimientodetalles') ?></h4>
                <?= print_r($movimientoencabezado)?>
                <?php if (!empty($movimientoencabezado->movimientodetalles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Movimientoencabezado Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Pbruto') ?></th>
                            <th><?= __('Tara') ?></th>
                            <th><?= __('Pneto') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($movimientoencabezado->movimientodetalles as $movimientodetalles) : ?>
                        <tr>
                            <td><?= h($movimientodetalles->id) ?></td>
                            <td><?= h($movimientodetalles->movimientoencabezado_id) ?></td>
                            <td><?= h($movimientodetalles->producto->nombre) ?></td>
                            <td><?= h($movimientodetalles->pbruto) ?></td>
                            <td><?= h($movimientodetalles->tara) ?></td>
                            <td><?= h($movimientodetalles->pneto) ?></td>
                            <td><?= h($movimientodetalles->created) ?></td>
                            <td><?= h($movimientodetalles->modified) ?></td>
                            <td><?= h($movimientodetalles->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movimientodetalles', 'action' => 'view', $movimientodetalles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movimientodetalles', 'action' => 'edit', $movimientodetalles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movimientodetalles', 'action' => 'delete', $movimientodetalles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientodetalles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
