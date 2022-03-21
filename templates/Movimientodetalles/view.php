<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientodetalle $movimientodetalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movimientodetalle'), ['action' => 'edit', $movimientodetalle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movimientodetalle'), ['action' => 'delete', $movimientodetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientodetalle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movimientodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movimientodetalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientodetalles view content">
            <h3><?= h($movimientodetalle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Movimientoencabezado') ?></th>
                    <td><?= $movimientodetalle->has('movimientoencabezado') ? $this->Html->link($movimientodetalle->movimientoencabezado->id, ['controller' => 'Movimientoencabezados', 'action' => 'view', $movimientodetalle->movimientoencabezado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $movimientodetalle->has('producto') ? $this->Html->link($movimientodetalle->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $movimientodetalle->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $movimientodetalle->has('user') ? $this->Html->link($movimientodetalle->user->email, ['controller' => 'Users', 'action' => 'view', $movimientodetalle->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movimientodetalle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pbruto') ?></th>
                    <td><?= $this->Number->format($movimientodetalle->pbruto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tara') ?></th>
                    <td><?= $this->Number->format($movimientodetalle->tara) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pneto') ?></th>
                    <td><?= $this->Number->format($movimientodetalle->pneto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($movimientodetalle->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($movimientodetalle->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
