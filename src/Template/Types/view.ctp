<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="types view large-9 medium-8 columns content">
    <h3><?= h($type->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($type->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($type->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($type->applications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tenant Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Property Id') ?></th>
                <th scope="col"><?= __('Unit Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Total Number Of Occupants') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Recurring Charges Frequency') ?></th>
                <th scope="col"><?= __('Next Due Date') ?></th>
                <th scope="col"><?= __('Rent') ?></th>
                <th scope="col"><?= __('Security Deposit') ?></th>
                <th scope="col"><?= __('Security Deposit Date') ?></th>
                <th scope="col"><?= __('Emergency Contact') ?></th>
                <th scope="col"><?= __('Co Signer Details') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Agreement') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->applications as $applications): ?>
            <tr>
                <td><?= h($applications->id) ?></td>
                <td><?= h($applications->tenant_id) ?></td>
                <td><?= h($applications->status) ?></td>
                <td><?= h($applications->property_id) ?></td>
                <td><?= h($applications->unit_id) ?></td>
                <td><?= h($applications->type_id) ?></td>
                <td><?= h($applications->total_number_of_occupants) ?></td>
                <td><?= h($applications->start_date) ?></td>
                <td><?= h($applications->end_date) ?></td>
                <td><?= h($applications->recurring_charges_frequency) ?></td>
                <td><?= h($applications->next_due_date) ?></td>
                <td><?= h($applications->rent) ?></td>
                <td><?= h($applications->security_deposit) ?></td>
                <td><?= h($applications->security_deposit_date) ?></td>
                <td><?= h($applications->emergency_contact) ?></td>
                <td><?= h($applications->co_signer_details) ?></td>
                <td><?= h($applications->notes) ?></td>
                <td><?= h($applications->agreement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
