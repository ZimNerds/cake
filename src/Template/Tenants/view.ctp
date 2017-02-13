<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tenant'), ['action' => 'edit', $tenant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tenant'), ['action' => 'delete', $tenant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tenant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tenants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tenant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employment'), ['controller' => 'Employment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employment'), ['controller' => 'Employment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List References'), ['controller' => 'References', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reference'), ['controller' => 'References', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rental History'), ['controller' => 'RentalHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental History'), ['controller' => 'RentalHistory', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tenants view large-9 medium-8 columns content">
    <h3><?= h($tenant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tenant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($tenant->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($tenant->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($tenant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($tenant->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Driver License Number') ?></th>
            <td><?= h($tenant->driver_license_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $tenant->has('country') ? $this->Html->link($tenant->country->name, ['controller' => 'Countries', 'action' => 'view', $tenant->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requested Lease Term') ?></th>
            <td><?= h($tenant->requested_lease_term) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($tenant->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tenant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Gross Pay') ?></th>
            <td><?= $this->Number->format($tenant->monthly_gross_pay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Additional Income') ?></th>
            <td><?= $this->Number->format($tenant->additional_income) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assets') ?></th>
            <td><?= $this->Number->format($tenant->assets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($tenant->birth_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($tenant->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($tenant->applications)): ?>
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
            <?php foreach ($tenant->applications as $applications): ?>
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
        <h4><?= __('Related Employment') ?></h4>
        <?php if (!empty($tenant->employment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tenant Id') ?></th>
                <th scope="col"><?= __('Employer Name') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Employer Phone') ?></th>
                <th scope="col"><?= __('Employed From') ?></th>
                <th scope="col"><?= __('Employed Till') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tenant->employment as $employment): ?>
            <tr>
                <td><?= h($employment->id) ?></td>
                <td><?= h($employment->tenant_id) ?></td>
                <td><?= h($employment->employer_name) ?></td>
                <td><?= h($employment->city_id) ?></td>
                <td><?= h($employment->employer_phone) ?></td>
                <td><?= h($employment->employed_from) ?></td>
                <td><?= h($employment->employed_till) ?></td>
                <td><?= h($employment->occupation) ?></td>
                <td><?= h($employment->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employment', 'action' => 'view', $employment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employment', 'action' => 'edit', $employment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employment', 'action' => 'delete', $employment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related References') ?></h4>
        <?php if (!empty($tenant->references)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tenant Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tenant->references as $references): ?>
            <tr>
                <td><?= h($references->id) ?></td>
                <td><?= h($references->tenant_id) ?></td>
                <td><?= h($references->name) ?></td>
                <td><?= h($references->phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'References', 'action' => 'view', $references->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'References', 'action' => 'edit', $references->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'References', 'action' => 'delete', $references->id], ['confirm' => __('Are you sure you want to delete # {0}?', $references->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rental History') ?></h4>
        <?php if (!empty($tenant->rental_history)): ?>
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
            <?php foreach ($tenant->rental_history as $rentalHistory): ?>
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
