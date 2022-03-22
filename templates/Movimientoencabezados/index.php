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
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('Numero') ?></th>
                    <th><?= $this->Paginator->sort('PROVEEDOR') ?></th>
                    <th><?= $this->Paginator->sort('TIPO MOVIMIENTO') ?></th>
                    <th><?= $this->Paginator->sort('TURNO') ?></th>
                    
                
                    <th class="actions"><?= __('ACCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movimientoencabezados as $movimientoencabezado): ?>
                <tr>
                    <td><?= h($movimientoencabezado->fecha) ?></td>
                    <td><?= $this->Number->format($movimientoencabezado->id) ?></td>
                    <td><?= $movimientoencabezado->has('proveedor') ? $this->Html->link($movimientoencabezado->proveedor->nombre, ['controller' => 'Proveedors', 'action' => 'view', $movimientoencabezado->proveedor->id]) : '' ?></td>
                    <td><?= $movimientoencabezado->has('tipomovimiento') ? $this->Html->link($movimientoencabezado->tipomovimiento->nombre, ['controller' => 'Tipomovimientos', 'action' => 'view', $movimientoencabezado->tipomovimiento->id]) : '' ?></td>
                    <td><?= $movimientoencabezado->has('turno') ? $this->Html->link($movimientoencabezado->turno->nombre, ['controller' => 'Turnos', 'action' => 'view', $movimientoencabezado->turno->id]) : '' ?></td>
                    
                    
                    <td class="actions">
                        <?= $this->Html->link(__('VER'), ['action' => 'view', $movimientoencabezado->id]) ?>
                        <?= $this->Html->link(__('MODIFICAR'), ['action' => 'edit', $movimientoencabezado->id]) ?>
                        <?= $this->Form->postLink(__('ELIMINAR'), ['action' => 'delete', $movimientoencabezado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezado->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
