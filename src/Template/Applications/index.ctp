<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applications index large-9 medium-8 columns content">
    <h3><?= __('Applications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tenant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_number_of_occupants') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recurring_charges_frequency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_due_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('security_deposit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('security_deposit_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emergency_contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('co_signer_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agreement') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
            <tr>
                <td><?= $this->Number->format($application->id) ?></td>
                <td><?= $application->has('tenant') ? $this->Html->link($application->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $application->tenant->id]) : '' ?></td>
                <td><?= h($application->status) ?></td>
                <td><?= $application->has('property') ? $this->Html->link($application->property->name, ['controller' => 'Properties', 'action' => 'view', $application->property->id]) : '' ?></td>
                <td><?= $application->has('unit') ? $this->Html->link($application->unit->id, ['controller' => 'Units', 'action' => 'view', $application->unit->id]) : '' ?></td>
                <td><?= $application->has('type') ? $this->Html->link($application->type->name, ['controller' => 'Types', 'action' => 'view', $application->type->id]) : '' ?></td>
                <td><?= h($application->total_number_of_occupants) ?></td>
                <td><?= h($application->start_date) ?></td>
                <td><?= h($application->end_date) ?></td>
                <td><?= h($application->recurring_charges_frequency) ?></td>
                <td><?= h($application->next_due_date) ?></td>
                <td><?= $this->Number->format($application->rent) ?></td>
                <td><?= $this->Number->format($application->security_deposit) ?></td>
                <td><?= h($application->security_deposit_date) ?></td>
                <td><?= h($application->emergency_contact) ?></td>
                <td><?= h($application->co_signer_details) ?></td>
                <td><?= h($application->agreement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
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
