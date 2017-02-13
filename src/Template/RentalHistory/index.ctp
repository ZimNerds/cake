<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rental History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rentalHistory index large-9 medium-8 columns content">
    <h3><?= __('Rental History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tenant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_rent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration_of_residency_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reason_for_leaving') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rentalHistory as $rentalHistory): ?>
            <tr>
                <td><?= $this->Number->format($rentalHistory->id) ?></td>
                <td><?= $rentalHistory->has('tenant') ? $this->Html->link($rentalHistory->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $rentalHistory->tenant->id]) : '' ?></td>
                <td><?= h($rentalHistory->address) ?></td>
                <td><?= $rentalHistory->has('owner') ? $this->Html->link($rentalHistory->owner->name, ['controller' => 'Owners', 'action' => 'view', $rentalHistory->owner->id]) : '' ?></td>
                <td><?= h($rentalHistory->owner_name) ?></td>
                <td><?= $this->Number->format($rentalHistory->monthly_rent) ?></td>
                <td><?= h($rentalHistory->duration_of_residency_from) ?></td>
                <td><?= h($rentalHistory->to) ?></td>
                <td><?= h($rentalHistory->reason_for_leaving) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rentalHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rentalHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?>
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
