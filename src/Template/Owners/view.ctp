<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="owners view large-9 medium-8 columns content">
    <h3><?= h($owner->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($owner->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($owner->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($owner->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($owner->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary Email') ?></th>
            <td><?= h($owner->primary_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alternate Email') ?></th>
            <td><?= h($owner->alternate_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($owner->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $owner->has('country') ? $this->Html->link($owner->country->name, ['controller' => 'Countries', 'action' => 'view', $owner->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($owner->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $owner->has('city') ? $this->Html->link($owner->city->name, ['controller' => 'Cities', 'action' => 'view', $owner->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $owner->has('state') ? $this->Html->link($owner->state->name, ['controller' => 'States', 'action' => 'view', $owner->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($owner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($owner->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($owner->date_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($owner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($owner->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($owner->comments)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Properties') ?></h4>
        <?php if (!empty($owner->properties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Number Of Units') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Operating Account') ?></th>
                <th scope="col"><?= __('Property Reserve') ?></th>
                <th scope="col"><?= __('Lease Term') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->properties as $properties): ?>
            <tr>
                <td><?= h($properties->id) ?></td>
                <td><?= h($properties->name) ?></td>
                <td><?= h($properties->type) ?></td>
                <td><?= h($properties->number_of_units) ?></td>
                <td><?= h($properties->photo) ?></td>
                <td><?= h($properties->photo_dir) ?></td>
                <td><?= h($properties->owner_id) ?></td>
                <td><?= h($properties->operating_account) ?></td>
                <td><?= h($properties->property_reserve) ?></td>
                <td><?= h($properties->lease_term) ?></td>
                <td><?= h($properties->country_id) ?></td>
                <td><?= h($properties->address) ?></td>
                <td><?= h($properties->city_id) ?></td>
                <td><?= h($properties->state_id) ?></td>
                <td><?= h($properties->zip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Properties', 'action' => 'view', $properties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Properties', 'action' => 'edit', $properties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Properties', 'action' => 'delete', $properties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $properties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rental History') ?></h4>
        <?php if (!empty($owner->rental_history)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tenant Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Owner Name') ?></th>
                <th scope="col"><?= __('Monthly Rent') ?></th>
                <th scope="col"><?= __('Duration Of Residency From') ?></th>
                <th scope="col"><?= __('To') ?></th>
                <th scope="col"><?= __('Reason For Leaving') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->rental_history as $rentalHistory): ?>
            <tr>
                <td><?= h($rentalHistory->id) ?></td>
                <td><?= h($rentalHistory->tenant_id) ?></td>
                <td><?= h($rentalHistory->address) ?></td>
                <td><?= h($rentalHistory->owner_id) ?></td>
                <td><?= h($rentalHistory->owner_name) ?></td>
                <td><?= h($rentalHistory->monthly_rent) ?></td>
                <td><?= h($rentalHistory->duration_of_residency_from) ?></td>
                <td><?= h($rentalHistory->to) ?></td>
                <td><?= h($rentalHistory->reason_for_leaving) ?></td>
                <td><?= h($rentalHistory->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RentalHistory', 'action' => 'view', $rentalHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RentalHistory', 'action' => 'edit', $rentalHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RentalHistory', 'action' => 'delete', $rentalHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rentalHistory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
