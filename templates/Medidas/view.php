<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medida $medida
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Medida'), ['action' => 'edit', $medida->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Medida'), ['action' => 'delete', $medida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medida->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Medidas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Medida'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medidas view content">
            <h3><?= h($medida->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($medida->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $medida->has('user') ? $this->Html->link($medida->user->id, ['controller' => 'Users', 'action' => 'view', $medida->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($medida->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($medida->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($medida->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($medida->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $medida->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($medida->productos)) : ?>
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
                        <?php foreach ($medida->productos as $productos) : ?>
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
