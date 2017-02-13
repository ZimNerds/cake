<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employment'), ['action' => 'edit', $employment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employment'), ['action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employment view large-9 medium-8 columns content">
    <h3><?= h($employment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tenant') ?></th>
            <td><?= $employment->has('tenant') ? $this->Html->link($employment->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $employment->tenant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer Name') ?></th>
            <td><?= h($employment->employer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $employment->has('city') ? $this->Html->link($employment->city->name, ['controller' => 'Cities', 'action' => 'view', $employment->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer Phone') ?></th>
            <td><?= h($employment->employer_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($employment->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employed From') ?></th>
            <td><?= h($employment->employed_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employed Till') ?></th>
            <td><?= h($employment->employed_till) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($employment->notes)); ?>
    </div>
</div>
