<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass Reset Key') ?></th>
            <td><?= h($user->pass_reset_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsBanned') ?></th>
            <td><?= $this->Number->format($user->isBanned) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsApproved') ?></th>
            <td><?= $this->Number->format($user->isApproved) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass Reset Expiry') ?></th>
            <td><?= $this->Number->format($user->pass_reset_expiry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Custom1') ?></h4>
        <?= $this->Text->autoParagraph(h($user->custom1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Custom2') ?></h4>
        <?= $this->Text->autoParagraph(h($user->custom2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Custom3') ?></h4>
        <?= $this->Text->autoParagraph(h($user->custom3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Custom4') ?></h4>
        <?= $this->Text->autoParagraph(h($user->custom4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comments') ?></h4>
        <?= $this->Text->autoParagraph(h($user->comments)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Permissions') ?></h4>
        <?php if (!empty($user->permissions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('TableName') ?></th>
                <th scope="col"><?= __('AllowInsert') ?></th>
                <th scope="col"><?= __('AllowView') ?></th>
                <th scope="col"><?= __('AllowEdit') ?></th>
                <th scope="col"><?= __('AllowDelete') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->permissions as $permissions): ?>
            <tr>
                <td><?= h($permissions->id) ?></td>
                <td><?= h($permissions->user_id) ?></td>
                <td><?= h($permissions->tableName) ?></td>
                <td><?= h($permissions->allowInsert) ?></td>
                <td><?= h($permissions->allowView) ?></td>
                <td><?= h($permissions->allowEdit) ?></td>
                <td><?= h($permissions->allowDelete) ?></td>
                <td><?= h($permissions->permission_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permissions', 'action' => 'view', $permissions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
