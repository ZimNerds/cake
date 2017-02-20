<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="properties index large-9 medium-8 columns content">
    <h3><?= __('Properties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_of_units') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operating_account') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_reserve') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lease_term') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
            <tr>
                <td><?= $this->Number->format($property->id) ?></td>
                <td><?= h($property->name) ?></td>
                <td><?= $property->has('type') ? $this->Html->link($property->type->name, ['controller' => 'Types', 'action' => 'view', $property->type->id]) : '' ?></td>
                <td><?= $this->Number->format($property->number_of_units) ?></td>
                <td><?= h($property->photo) ?></td>
                <td><?= h($property->photo_dir) ?></td>
                <td><?= $property->has('owner') ? $this->Html->link($property->owner->name, ['controller' => 'Owners', 'action' => 'view', $property->owner->id]) : '' ?></td>
                <td><?= $property->has('user') ? $this->Html->link($property->user->id, ['controller' => 'Users', 'action' => 'view', $property->user->id]) : '' ?></td>
                <td><?= h($property->operating_account) ?></td>
                <td><?= $this->Number->format($property->property_reserve) ?></td>
                <td><?= h($property->lease_term) ?></td>
                <td><?= $property->has('country') ? $this->Html->link($property->country->name, ['controller' => 'Countries', 'action' => 'view', $property->country->id]) : '' ?></td>
                <td><?= $property->has('city') ? $this->Html->link($property->city->name, ['controller' => 'Cities', 'action' => 'view', $property->city->id]) : '' ?></td>
                <td><?= $property->has('state') ? $this->Html->link($property->state->name, ['controller' => 'States', 'action' => 'view', $property->state->id]) : '' ?></td>
                <td><?= $this->Number->format($property->zip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
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
