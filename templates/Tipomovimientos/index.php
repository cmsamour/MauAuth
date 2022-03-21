<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipomovimiento[]|\Cake\Collection\CollectionInterface $tipomovimientos
 */
?>
<div class="tipomovimientos index content">
    <?= $this->Html->link(__('New Tipomovimiento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipomovimientos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('espositivo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipomovimientos as $tipomovimiento): ?>
                <tr>
                    <td><?= $this->Number->format($tipomovimiento->id) ?></td>
                    <td><?= h($tipomovimiento->nombre) ?></td>
                    <td><?= h($tipomovimiento->espositivo) ?></td>
                    <td><?= h($tipomovimiento->created) ?></td>
                    <td><?= h($tipomovimiento->modified) ?></td>
                    <td><?= $tipomovimiento->has('user') ? $this->Html->link($tipomovimiento->user->email, ['controller' => 'Users', 'action' => 'view', $tipomovimiento->user->id]) : '' ?></td>
                    <td><?= h($tipomovimiento->activo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipomovimiento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipomovimiento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipomovimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipomovimiento->id)]) ?>
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
