<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medida $medida
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Medidas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medidas form content">
            <?= $this->Form->create($medida) ?>
            <fieldset>
                <legend><?= __('Add Medida') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('price');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
