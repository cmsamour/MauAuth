<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipomovimiento $tipomovimiento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipomovimiento'), ['action' => 'edit', $tipomovimiento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipomovimiento'), ['action' => 'delete', $tipomovimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipomovimiento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipomovimientos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipomovimiento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipomovimientos view content">
            <h3><?= h($tipomovimiento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipomovimiento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $tipomovimiento->has('user') ? $this->Html->link($tipomovimiento->user->email, ['controller' => 'Users', 'action' => 'view', $tipomovimiento->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tipomovimiento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tipomovimiento->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tipomovimiento->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Espositivo') ?></th>
                    <td><?= $tipomovimiento->espositivo ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $tipomovimiento->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Movimientoencabezados') ?></h4>
                <?php if (!empty($tipomovimiento->movimientoencabezados)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Proveedor Id') ?></th>
                            <th><?= __('Tipomovimiento Id') ?></th>
                            <th><?= __('Turno Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tipomovimiento->movimientoencabezados as $movimientoencabezados) : ?>
                        <tr>
                            <td><?= h($movimientoencabezados->id) ?></td>
                            <td><?= h($movimientoencabezados->proveedor_id) ?></td>
                            <td><?= h($movimientoencabezados->tipomovimiento_id) ?></td>
                            <td><?= h($movimientoencabezados->turno_id) ?></td>
                            <td><?= h($movimientoencabezados->fecha) ?></td>
                            <td><?= h($movimientoencabezados->created) ?></td>
                            <td><?= h($movimientoencabezados->modified) ?></td>
                            <td><?= h($movimientoencabezados->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Movimientoencabezados', 'action' => 'view', $movimientoencabezados->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Movimientoencabezados', 'action' => 'edit', $movimientoencabezados->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movimientoencabezados', 'action' => 'delete', $movimientoencabezados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezados->id)]) ?>
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
