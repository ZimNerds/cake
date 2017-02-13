<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rentalHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rental History'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rentalHistory form large-9 medium-8 columns content">
    <?= $this->Form->create($rentalHistory) ?>
    <fieldset>
        <legend><?= __('Edit Rental History') ?></legend>
        <?php
            echo $this->Form->input('tenant_id', ['options' => $tenants, 'empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('owner_id', ['options' => $owners, 'empty' => true]);
            echo $this->Form->input('owner_name');
            echo $this->Form->input('monthly_rent');
            echo $this->Form->input('duration_of_residency_from', ['empty' => true]);
            echo $this->Form->input('to', ['empty' => true]);
            echo $this->Form->input('reason_for_leaving');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
