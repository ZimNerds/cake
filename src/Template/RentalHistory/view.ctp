<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rental History'), ['action' => 'edit', $rentalHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental History'), ['action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rentalHistory view large-9 medium-8 columns content">
    <h3><?= h($rentalHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tenant') ?></th>
            <td><?= $rentalHistory->has('tenant') ? $this->Html->link($rentalHistory->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $rentalHistory->tenant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($rentalHistory->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $rentalHistory->has('owner') ? $this->Html->link($rentalHistory->owner->name, ['controller' => 'Owners', 'action' => 'view', $rentalHistory->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Name') ?></th>
            <td><?= h($rentalHistory->owner_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason For Leaving') ?></th>
            <td><?= h($rentalHistory->reason_for_leaving) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rentalHistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Rent') ?></th>
            <td><?= $this->Number->format($rentalHistory->monthly_rent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration Of Residency From') ?></th>
            <td><?= h($rentalHistory->duration_of_residency_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To') ?></th>
            <td><?= h($rentalHistory->to) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($rentalHistory->notes)); ?>
    </div>
</div>
