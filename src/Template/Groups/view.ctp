<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Records'), ['controller' => 'UsersRecords', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Record'), ['controller' => 'UsersRecords', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowSignup') ?></th>
            <td><?= $this->Number->format($group->allowSignup) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NeedsApproval') ?></th>
            <td><?= $this->Number->format($group->needsApproval) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($group->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($group->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('IsBanned') ?></th>
                <th scope="col"><?= __('IsApproved') ?></th>
                <th scope="col"><?= __('Custom1') ?></th>
                <th scope="col"><?= __('Custom2') ?></th>
                <th scope="col"><?= __('Custom3') ?></th>
                <th scope="col"><?= __('Custom4') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Pass Reset Key') ?></th>
                <th scope="col"><?= __('Pass Reset Expiry') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->isBanned) ?></td>
                <td><?= h($users->isApproved) ?></td>
                <td><?= h($users->custom1) ?></td>
                <td><?= h($users->custom2) ?></td>
                <td><?= h($users->custom3) ?></td>
                <td><?= h($users->custom4) ?></td>
                <td><?= h($users->comments) ?></td>
                <td><?= h($users->pass_reset_key) ?></td>
                <td><?= h($users->pass_reset_expiry) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users Records') ?></h4>
        <?php if (!empty($group->users_records)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('TableName') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->users_records as $usersRecords): ?>
            <tr>
                <td><?= h($usersRecords->id) ?></td>
                <td><?= h($usersRecords->tableName) ?></td>
                <td><?= h($usersRecords->user_id) ?></td>
                <td><?= h($usersRecords->created) ?></td>
                <td><?= h($usersRecords->modified) ?></td>
                <td><?= h($usersRecords->group_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsersRecords', 'action' => 'view', $usersRecords->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersRecords', 'action' => 'edit', $usersRecords->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersRecords', 'action' => 'delete', $usersRecords->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRecords->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Permissions') ?></h4>
        <?php if (!empty($group->permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col"><?= __('Member Id') ?></th>
                <th scope="col"><?= __('TableName') ?></th>
                <th scope="col"><?= __('AllowInsert') ?></th>
                <th scope="col"><?= __('AllowView') ?></th>
                <th scope="col"><?= __('AllowEdit') ?></th>
                <th scope="col"><?= __('AllowDelete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->permissions as $permissions): ?>
            <tr>
                <td><?= h($permissions->permission_id) ?></td>
                <td><?= h($permissions->member_id) ?></td>
                <td><?= h($permissions->tableName) ?></td>
                <td><?= h($permissions->allowInsert) ?></td>
                <td><?= h($permissions->allowView) ?></td>
                <td><?= h($permissions->allowEdit) ?></td>
                <td><?= h($permissions->allowDelete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->permission_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->permission_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissions->permission_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
