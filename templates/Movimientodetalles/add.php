<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientodetalle $movimientodetalle
 * @var \Cake\Collection\CollectionInterface|string[] $movimientoencabezados
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Movimientodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientodetalles form content">
            <?php //print_r($movimientoencabezados->id); ?>
            <?= $this->Form->create($movimientodetalle) ?>
            <fieldset>
                <legend><?= __('Add Movimientodetalle') ?></legend>
                <?php
                    //echo $this->Form->control('movimientoencabezado_id', ['options' => $movimientoencabezados]);
                    echo $this->Form->text('movimientoencabezado_id',
                    ['value' => $movimientoencabezados->id, 'label' => 'Ojaja','disabled' => 'true']
                );
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('pbruto');
                    echo $this->Form->control('tara');
                    echo $this->Form->control('pneto');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
