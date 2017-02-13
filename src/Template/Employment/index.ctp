<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employment index large-9 medium-8 columns content">
    <h3><?= __('Employment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tenant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employed_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employed_till') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employment as $employment): ?>
            <tr>
                <td><?= $this->Number->format($employment->id) ?></td>
                <td><?= $employment->has('tenant') ? $this->Html->link($employment->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $employment->tenant->id]) : '' ?></td>
                <td><?= h($employment->employer_name) ?></td>
                <td><?= $employment->has('city') ? $this->Html->link($employment->city->name, ['controller' => 'Cities', 'action' => 'view', $employment->city->id]) : '' ?></td>
                <td><?= h($employment->employer_phone) ?></td>
                <td><?= h($employment->employed_from) ?></td>
                <td><?= h($employment->employed_till) ?></td>
                <td><?= h($employment->occupation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
