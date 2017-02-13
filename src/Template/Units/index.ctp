<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="units index large-9 medium-8 columns content">
    <h3><?= __('Units') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rooms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bathroom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('market_rent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rental_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deposit_amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($units as $unit): ?>
            <tr>
                <td><?= $this->Number->format($unit->id) ?></td>
                <td><?= $unit->has('property') ? $this->Html->link($unit->property->name, ['controller' => 'Properties', 'action' => 'view', $unit->property->id]) : '' ?></td>
                <td><?= h($unit->unit_number) ?></td>
                <td><?= $this->Html->image('/uploads/units/photo/'.$unit->photo_dir.'/square_'.$unit->photo) ?></td>
                <td><?= h($unit->status) ?></td>
                <td><?= h($unit->size) ?></td>
                <td><?= $unit->has('country') ? $this->Html->link($unit->country->name, ['controller' => 'Countries', 'action' => 'view', $unit->country->id]) : '' ?></td>
                <td><?= $this->Number->format($unit->address) ?></td>
                <td><?= $unit->has('city') ? $this->Html->link($unit->city->name, ['controller' => 'Cities', 'action' => 'view', $unit->city->id]) : '' ?></td>
                <td><?= $unit->has('state') ? $this->Html->link($unit->state->name, ['controller' => 'States', 'action' => 'view', $unit->state->id]) : '' ?></td>
                <td><?= $this->Number->format($unit->zip) ?></td>
                <td><?= h($unit->rooms) ?></td>
                <td><?= $this->Number->format($unit->bathroom) ?></td>
                <td><?= $this->Number->format($unit->market_rent) ?></td>
                <td><?= $this->Number->format($unit->rental_amount) ?></td>
                <td><?= $this->Number->format($unit->deposit_amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?>
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
