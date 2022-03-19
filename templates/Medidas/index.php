<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medida[]|\Cake\Collection\CollectionInterface $medidas
 */
?>
<div class="medidas index content">
    <?= $this->Html->link(__('New Medida'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Medidas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medidas as $medida): ?>
                <tr>
                    <td><?= $this->Number->format($medida->id) ?></td>
                    <td><?= h($medida->nombre) ?></td>
                    <td><?= $this->Number->format($medida->price) ?></td>
                    <td><?= h($medida->created) ?></td>
                    <td><?= h($medida->modified) ?></td>
                    <td><?= $medida->has('user') ? $this->Html->link($medida->user->id, ['controller' => 'Users', 'action' => 'view', $medida->user->id]) : '' ?></td>
                    <td><?= h($medida->activo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $medida->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medida->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medida->id)]) ?>
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
