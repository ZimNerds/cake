<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Property'), ['action' => 'edit', $property->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="properties view large-9 medium-8 columns content">
    <h3><?= h($property->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($property->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $property->has('type') ? $this->Html->link($property->type->name, ['controller' => 'Types', 'action' => 'view', $property->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($property->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($property->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $property->has('owner') ? $this->Html->link($property->owner->name, ['controller' => 'Owners', 'action' => 'view', $property->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operating Account') ?></th>
            <td><?= h($property->operating_account) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lease Term') ?></th>
            <td><?= h($property->lease_term) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $property->has('country') ? $this->Html->link($property->country->name, ['controller' => 'Countries', 'action' => 'view', $property->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $property->has('city') ? $this->Html->link($property->city->name, ['controller' => 'Cities', 'action' => 'view', $property->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $property->has('state') ? $this->Html->link($property->state->name, ['controller' => 'States', 'action' => 'view', $property->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($property->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Of Units') ?></th>
            <td><?= $this->Number->format($property->number_of_units) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property Reserve') ?></th>
            <td><?= $this->Number->format($property->property_reserve) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($property->zip) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($property->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($property->applications)): ?>
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
            <?php foreach ($property->applications as $applications): ?>
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
    <div class="related">
        <h4><?= __('Related Units') ?></h4>
        <?php if (!empty($property->units)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Property Id') ?></th>
                <th scope="col"><?= __('Unit Number') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Rooms') ?></th>
                <th scope="col"><?= __('Bathroom') ?></th>
                <th scope="col"><?= __('Features') ?></th>
                <th scope="col"><?= __('Market Rent') ?></th>
                <th scope="col"><?= __('Rental Amount') ?></th>
                <th scope="col"><?= __('Deposit Amount') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($property->units as $units): ?>
            <tr>
                <td><?= h($units->id) ?></td>
                <td><?= h($units->property_id) ?></td>
                <td><?= h($units->unit_number) ?></td>
                <td><?= h($units->photo) ?></td>
                <td><?= h($units->photo_dir) ?></td>
                <td><?= h($units->status) ?></td>
                <td><?= h($units->size) ?></td>
                <td><?= h($units->country_id) ?></td>
                <td><?= h($units->address) ?></td>
                <td><?= h($units->city_id) ?></td>
                <td><?= h($units->state_id) ?></td>
                <td><?= h($units->zip) ?></td>
                <td><?= h($units->rooms) ?></td>
                <td><?= h($units->bathroom) ?></td>
                <td><?= h($units->features) ?></td>
                <td><?= h($units->market_rent) ?></td>
                <td><?= h($units->rental_amount) ?></td>
                <td><?= h($units->deposit_amount) ?></td>
                <td><?= h($units->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Units', 'action' => 'view', $units->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Units', 'action' => 'edit', $units->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Units', 'action' => 'delete', $units->id], ['confirm' => __('Are you sure you want to delete # {0}?', $units->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
