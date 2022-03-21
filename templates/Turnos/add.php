<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turno $turno
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Turnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="turnos form content">
            <?= $this->Form->create($turno) ?>
            <fieldset>
                <legend><?= __('Add Turno') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('horainicial');
                    echo $this->Form->control('horafinal');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
