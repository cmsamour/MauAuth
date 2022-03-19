<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 * @var string[]|\Cake\Collection\CollectionInterface $medidas
 * @var string[]|\Cake\Collection\CollectionInterface $familias
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Edit Producto') ?></legend>
                <?php
                    echo $this->Form->control('medida_id', ['options' => $medidas]);
                    echo $this->Form->control('familia_id', ['options' => $familias]);
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
