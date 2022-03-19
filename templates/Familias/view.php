<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Familia $familia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Familia'), ['action' => 'edit', $familia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Familia'), ['action' => 'delete', $familia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Familias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Familia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="familias view content">
            <h3><?= h($familia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($familia->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $familia->has('user') ? $this->Html->link($familia->user->id, ['controller' => 'Users', 'action' => 'view', $familia->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($familia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($familia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($familia->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($familia->productos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Medida Id') ?></th>
                            <th><?= __('Familia Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($familia->productos as $productos) : ?>
                        <tr>
                            <td><?= h($productos->id) ?></td>
                            <td><?= h($productos->medida_id) ?></td>
                            <td><?= h($productos->familia_id) ?></td>
                            <td><?= h($productos->nombre) ?></td>
                            <td><?= h($productos->created) ?></td>
                            <td><?= h($productos->modified) ?></td>
                            <td><?= h($productos->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
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
