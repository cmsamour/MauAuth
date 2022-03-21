<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedors
 */
?>
<div class="proveedors index content">
    <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedors as $proveedor): ?>
                <tr>
                    <td><?= $this->Number->format($proveedor->id) ?></td>
                    <td><?= h($proveedor->nombre) ?></td>
                    <td><?= h($proveedor->created) ?></td>
                    <td><?= h($proveedor->modified) ?></td>
                    <td><?= $proveedor->has('user') ? $this->Html->link($proveedor->user->email, ['controller' => 'Users', 'action' => 'view', $proveedor->user->id]) : '' ?></td>
                    <td><?= h($proveedor->activo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proveedor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?>
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
