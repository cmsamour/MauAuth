<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turno[]|\Cake\Collection\CollectionInterface $turnos
 */
?>
<div class="turnos index content">
    <?= $this->Html->link(__('New Turno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Turnos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('horainicial') ?></th>
                    <th><?= $this->Paginator->sort('horafinal') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($turnos as $turno): ?>
                <tr>
                    <td><?= $this->Number->format($turno->id) ?></td>
                    <td><?= h($turno->nombre) ?></td>
                    <td><?= h($turno->horainicial) ?></td>
                    <td><?= h($turno->horafinal) ?></td>
                    <td><?= h($turno->created) ?></td>
                    <td><?= h($turno->modified) ?></td>
                    <td><?= $turno->has('user') ? $this->Html->link($turno->user->email, ['controller' => 'Users', 'action' => 'view', $turno->user->id]) : '' ?></td>
                    <td><?= h($turno->activo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $turno->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turno->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->id)]) ?>
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
