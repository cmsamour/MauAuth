<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientoencabezado $movimientoencabezado
 * @var \Cake\Collection\CollectionInterface|string[] $proveedors
 * @var \Cake\Collection\CollectionInterface|string[] $tipomovimientos
 * @var \Cake\Collection\CollectionInterface|string[] $turnos
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movimientoencabezados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientoencabezados form content">
            <?= $this->Form->create($movimientoencabezado) ?>
            <fieldset>
                <legend><?= __('Add Movimientoencabezado') ?></legend>
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
