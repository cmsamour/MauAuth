<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientodetalle[]|\Cake\Collection\CollectionInterface $movimientodetalles
 */
?>
<div class="movimientodetalles index content">
    <?= $this->Html->link(__('New Movimientodetalle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movimientodetalles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('movimientoencabezado_id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('pbruto') ?></th>
                    <th><?= $this->Paginator->sort('tara') ?></th>
                    <th><?= $this->Paginator->sort('pneto') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movimientodetalles as $movimientodetalle): ?>
                <tr>
                    <td><?= $this->Number->format($movimientodetalle->id) ?></td>
                    <td><?= $movimientodetalle->has('movimientoencabezado') ? $this->Html->link($movimientodetalle->movimientoencabezado->id, ['controller' => 'Movimientoencabezados', 'action' => 'view', $movimientodetalle->movimientoencabezado->id]) : '' ?></td>
                    <td><?= $movimientodetalle->has('producto') ? $this->Html->link($movimientodetalle->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $movimientodetalle->producto->id]) : '' ?></td>
                    <td><?= $this->Number->format($movimientodetalle->pbruto) ?></td>
                    <td><?= $this->Number->format($movimientodetalle->tara) ?></td>
                    <td><?= $this->Number->format($movimientodetalle->pneto) ?></td>
                    <td><?= h($movimientodetalle->created) ?></td>
                    <td><?= h($movimientodetalle->modified) ?></td>
                    <td><?= $movimientodetalle->has('user') ? $this->Html->link($movimientodetalle->user->email, ['controller' => 'Users', 'action' => 'view', $movimientodetalle->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movimientodetalle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimientodetalle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimientodetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientodetalle->id)]) ?>
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
