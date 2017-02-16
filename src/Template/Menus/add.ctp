<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menus form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Add Menu') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('controller');
            echo $this->Form->input('action');
            echo $this->Form->input('parent_menu', ['options' => $menus, 'empty' => true, 'label'=>'Parent Menu']);
              echo $this->Form->input('parent_menu', ['options' => $menus, 'empty' => true, 'class'=>'country']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
