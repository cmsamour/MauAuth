<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientoencabezado[]|\Cake\Collection\CollectionInterface $movimientoencabezados
 */
?>
<div class="movimientoencabezados index content">
    <?= $this->Html->link(__('NUEVO LISTA DE EMPAQUE'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('MOVIMIENTOS') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Numero') ?></th>
                    <th><?= $this->Paginator->sort('PROVEEDOR') ?></th>
                    <th><?= $this->Paginator->sort('TIPO MOVIMIENTO') ?></th>
                    <th><?= $this->Paginator->sort('TURNO') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movimientoencabezados as $movimientoencabezado): ?>
                <tr>
                    <td><?= $this->Number->format($movimientoencabezado->id) ?></td>
                    <td><?= $movimientoencabezado->has('proveedor') ? $this->Html->link($movimientoencabezado->proveedor->id, ['controller' => 'Proveedors', 'action' => 'view', $movimientoencabezado->proveedor->id]) : '' ?></td>
                    <td><?= $movimientoencabezado->has('tipomovimiento') ? $this->Html->link($movimientoencabezado->tipomovimiento->nombre, ['controller' => 'Tipomovimientos', 'action' => 'view', $movimientoencabezado->tipomovimiento->id]) : '' ?></td>
                    <td><?= $movimientoencabezado->has('turno') ? $this->Html->link($movimientoencabezado->turno->nombre, ['controller' => 'Turnos', 'action' => 'view', $movimientoencabezado->turno->id]) : '' ?></td>
                    <td><?= h($movimientoencabezado->fecha) ?></td>
                    <td><?= h($movimientoencabezado->created) ?></td>
                    <td><?= h($movimientoencabezado->modified) ?></td>
                    <td><?= $movimientoencabezado->has('user') ? $this->Html->link($movimientoencabezado->user->email, ['controller' => 'Users', 'action' => 'view', $movimientoencabezado->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movimientoencabezado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimientoencabezado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimientoencabezado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezado->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
