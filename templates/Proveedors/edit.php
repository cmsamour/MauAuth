<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proveedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Proveedors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedors form content">
            <?= $this->Form->create($proveedor) ?>
            <fieldset>
                <legend><?= __('Edit Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
