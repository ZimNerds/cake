<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employment'), ['controller' => 'Employment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employment'), ['controller' => 'Employment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List References'), ['controller' => 'References', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reference'), ['controller' => 'References', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tenants index large-9 medium-8 columns content">
    <h3><?= __('Tenants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('driver_license_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requested_lease_term') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_gross_pay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('additional_income') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tenants as $tenant): ?>
            <tr>
                <td><?= $this->Number->format($tenant->id) ?></td>
                <td><?= h($tenant->name) ?></td>
                <td><?= h($tenant->last_name) ?></td>
                <td><?= h($tenant->first_name) ?></td>
                <td><?= h($tenant->email) ?></td>
                <td><?= h($tenant->phone) ?></td>
                <td><?= h($tenant->birth_date) ?></td>
                <td><?= h($tenant->driver_license_number) ?></td>
                <td><?= $tenant->has('country') ? $this->Html->link($tenant->country->name, ['controller' => 'Countries', 'action' => 'view', $tenant->country->id]) : '' ?></td>
                <td><?= h($tenant->requested_lease_term) ?></td>
                <td><?= $this->Number->format($tenant->monthly_gross_pay) ?></td>
                <td><?= $this->Number->format($tenant->additional_income) ?></td>
                <td><?= $this->Number->format($tenant->assets) ?></td>
                <td><?= h($tenant->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tenant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tenant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?>
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
