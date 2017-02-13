<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['controller' => 'Properties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['controller' => 'Properties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['controller' => 'Tenants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['controller' => 'Tenants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sortname') ?></th>
            <td><?= h($country->sortname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phonecode') ?></th>
            <td><?= $this->Number->format($country->phonecode) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Owners') ?></h4>
        <?php if (!empty($country->owners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Company Name') ?></th>
                <th scope="col"><?= __('Date Of Birth') ?></th>
                <th scope="col"><?= __('Primary Email') ?></th>
                <th scope="col"><?= __('Alternate Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->owners as $owners): ?>
            <tr>
                <td><?= h($owners->id) ?></td>
                <td><?= h($owners->name) ?></td>
                <td><?= h($owners->first_name) ?></td>
                <td><?= h($owners->last_name) ?></td>
                <td><?= h($owners->company_name) ?></td>
                <td><?= h($owners->date_of_birth) ?></td>
                <td><?= h($owners->primary_email) ?></td>
                <td><?= h($owners->alternate_email) ?></td>
                <td><?= h($owners->phone) ?></td>
                <td><?= h($owners->country_id) ?></td>
                <td><?= h($owners->address) ?></td>
                <td><?= h($owners->city_id) ?></td>
                <td><?= h($owners->state_id) ?></td>
                <td><?= h($owners->zip) ?></td>
                <td><?= h($owners->comments) ?></td>
                <td><?= h($owners->created) ?></td>
                <td><?= h($owners->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Properties') ?></h4>
        <?php if (!empty($country->properties)): ?>
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
            <?php foreach ($country->properties as $properties): ?>
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
        <h4><?= __('Related States') ?></h4>
        <?php if (!empty($country->states)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->states as $states): ?>
            <tr>
                <td><?= h($states->id) ?></td>
                <td><?= h($states->name) ?></td>
                <td><?= h($states->country_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'States', 'action' => 'view', $states->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'States', 'action' => 'edit', $states->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'States', 'action' => 'delete', $states->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tenants') ?></h4>
        <?php if (!empty($country->tenants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Birth Date') ?></th>
                <th scope="col"><?= __('Driver License Number') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Requested Lease Term') ?></th>
                <th scope="col"><?= __('Monthly Gross Pay') ?></th>
                <th scope="col"><?= __('Additional Income') ?></th>
                <th scope="col"><?= __('Assets') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->tenants as $tenants): ?>
            <tr>
                <td><?= h($tenants->id) ?></td>
                <td><?= h($tenants->name) ?></td>
                <td><?= h($tenants->last_name) ?></td>
                <td><?= h($tenants->first_name) ?></td>
                <td><?= h($tenants->email) ?></td>
                <td><?= h($tenants->phone) ?></td>
                <td><?= h($tenants->birth_date) ?></td>
                <td><?= h($tenants->driver_license_number) ?></td>
                <td><?= h($tenants->country_id) ?></td>
                <td><?= h($tenants->requested_lease_term) ?></td>
                <td><?= h($tenants->monthly_gross_pay) ?></td>
                <td><?= h($tenants->additional_income) ?></td>
                <td><?= h($tenants->assets) ?></td>
                <td><?= h($tenants->status) ?></td>
                <td><?= h($tenants->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tenants', 'action' => 'view', $tenants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tenants', 'action' => 'edit', $tenants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tenants', 'action' => 'delete', $tenants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Units') ?></h4>
        <?php if (!empty($country->units)): ?>
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
            <?php foreach ($country->units as $units): ?>
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
