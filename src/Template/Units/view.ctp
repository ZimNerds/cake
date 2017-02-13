<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="units view large-9 medium-8 columns content">
    <h3><?= h($unit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $unit->has('property') ? $this->Html->link($unit->property->name, ['controller' => 'Properties', 'action' => 'view', $unit->property->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Number') ?></th>
            <td><?= h($unit->unit_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($unit->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($unit->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($unit->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= h($unit->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $unit->has('country') ? $this->Html->link($unit->country->name, ['controller' => 'Countries', 'action' => 'view', $unit->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $unit->has('city') ? $this->Html->link($unit->city->name, ['controller' => 'Cities', 'action' => 'view', $unit->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $unit->has('state') ? $this->Html->link($unit->state->name, ['controller' => 'States', 'action' => 'view', $unit->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rooms') ?></th>
            <td><?= h($unit->rooms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($unit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= $this->Number->format($unit->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($unit->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bathroom') ?></th>
            <td><?= $this->Number->format($unit->bathroom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Market Rent') ?></th>
            <td><?= $this->Number->format($unit->market_rent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Amount') ?></th>
            <td><?= $this->Number->format($unit->rental_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deposit Amount') ?></th>
            <td><?= $this->Number->format($unit->deposit_amount) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Features') ?></h4>
        <?= $this->Text->autoParagraph(h($unit->features)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($unit->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($unit->applications)): ?>
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
            <?php foreach ($unit->applications as $applications): ?>
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
