<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="owners index large-9 medium-8 columns content">
    <h3><?= __('Owners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primary_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alternate_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($owners as $owner): ?>
            <tr>
                <td><?= $this->Number->format($owner->id) ?></td>
                <td><?= h($owner->name) ?></td>
                <td><?= h($owner->first_name) ?></td>
                <td><?= h($owner->last_name) ?></td>
                <td><?= h($owner->company_name) ?></td>
                <td><?= h($owner->date_of_birth) ?></td>
                <td><?= h($owner->primary_email) ?></td>
                <td><?= h($owner->alternate_email) ?></td>
                <td><?= h($owner->phone) ?></td>
                <td><?= $owner->has('country') ? $this->Html->link($owner->country->name, ['controller' => 'Countries', 'action' => 'view', $owner->country->id]) : '' ?></td>
                <td><?= h($owner->address) ?></td>
                <td><?= $owner->has('city') ? $this->Html->link($owner->city->name, ['controller' => 'Cities', 'action' => 'view', $owner->city->id]) : '' ?></td>
                <td><?= $owner->has('state') ? $this->Html->link($owner->state->name, ['controller' => 'States', 'action' => 'view', $owner->state->id]) : '' ?></td>
                <td><?= $this->Number->format($owner->zip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $owner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $owner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?>
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
