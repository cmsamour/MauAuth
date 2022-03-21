<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movimientodetalle $movimientodetalle
 * @var string[]|\Cake\Collection\CollectionInterface $movimientoencabezados
 * @var string[]|\Cake\Collection\CollectionInterface $productos
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movimientodetalle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movimientodetalle->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Movimientodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movimientodetalles form content">
            <?= $this->Form->create($movimientodetalle) ?>
            <fieldset>
                <legend><?= __('Edit Movimientodetalle') ?></legend>
                <?php
                    echo $this->Form->control('movimientoencabezado_id', ['options' => $movimientoencabezados]);
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
