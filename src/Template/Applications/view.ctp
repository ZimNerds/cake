<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applications view large-9 medium-8 columns content">
    <h3><?= h($application->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tenant') ?></th>
            <td><?= $application->has('tenant') ? $this->Html->link($application->tenant->name, ['controller' => 'Tenants', 'action' => 'view', $application->tenant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($application->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $application->has('property') ? $this->Html->link($application->property->name, ['controller' => 'Properties', 'action' => 'view', $application->property->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= $application->has('unit') ? $this->Html->link($application->unit->id, ['controller' => 'Units', 'action' => 'view', $application->unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $application->has('type') ? $this->Html->link($application->type->name, ['controller' => 'Types', 'action' => 'view', $application->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Number Of Occupants') ?></th>
            <td><?= h($application->total_number_of_occupants) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recurring Charges Frequency') ?></th>
            <td><?= h($application->recurring_charges_frequency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emergency Contact') ?></th>
            <td><?= h($application->emergency_contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Co Signer Details') ?></th>
            <td><?= h($application->co_signer_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agreement') ?></th>
            <td><?= h($application->agreement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($application->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rent') ?></th>
            <td><?= $this->Number->format($application->rent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Security Deposit') ?></th>
            <td><?= $this->Number->format($application->security_deposit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($application->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($application->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Due Date') ?></th>
            <td><?= h($application->next_due_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Security Deposit Date') ?></th>
            <td><?= h($application->security_deposit_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($application->notes)); ?>
    </div>
</div>
