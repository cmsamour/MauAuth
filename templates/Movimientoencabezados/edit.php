<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientoencabezado $movimientoencabezado
 * @var string[]|\Cake\Collection\CollectionInterface $proveedors
 * @var string[]|\Cake\Collection\CollectionInterface $tipomovimientos
 * @var string[]|\Cake\Collection\CollectionInterface $turnos
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movimientoencabezado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movimientoencabezado->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Movimientoencabezados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientoencabezados form content">
            <?= $this->Form->create($movimientoencabezado) ?>
            <fieldset>
                <legend><?= __('Edit Movimientoencabezado') ?></legend>
                <?php
                    echo $this->Form->control('proveedor_id', ['options' => $proveedors]);
                    echo $this->Form->control('tipomovimiento_id', ['options' => $tipomovimientos]);
                    echo $this->Form->control('turno_id', ['options' => $turnos]);
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
