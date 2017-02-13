<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reference'), ['action' => 'edit', $reference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reference'), ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List References'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="references view large-9 medium-8 columns content">
    <h3><?= h($reference->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tenant') ?></th>
            <td><?= $reference->has('tenant') ? $this->Html->link($reference->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $reference->tenant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($reference->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($reference->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reference->id) ?></td>
        </tr>
    </table>
</div>
