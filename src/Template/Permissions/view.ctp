<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view large-9 medium-8 columns content">
    <h3><?= h($permission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $permission->has('user') ? $this->Html->link($permission->user->id, ['controller' => 'Users', 'action' => 'view', $permission->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TableName') ?></th>
            <td><?= h($permission->tableName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($permission->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowInsert') ?></th>
            <td><?= $this->Number->format($permission->allowInsert) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowView') ?></th>
            <td><?= $this->Number->format($permission->allowView) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowEdit') ?></th>
            <td><?= $this->Number->format($permission->allowEdit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowDelete') ?></th>
            <td><?= $this->Number->format($permission->allowDelete) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Permission Id') ?></th>
            <td><?= $this->Number->format($permission->permission_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permissions') ?></h4>
        <?php if (!empty($permission->permissions)): ?>
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
            <?php foreach ($permission->permissions as $permissions): ?>
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
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($permission->groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('AllowSignup') ?></th>
                <th scope="col"><?= __('NeedsApproval') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permission->groups as $groups): ?>
            <tr>
                <td><?= h($groups->id) ?></td>
                <td><?= h($groups->name) ?></td>
                <td><?= h($groups->description) ?></td>
                <td><?= h($groups->allowSignup) ?></td>
                <td><?= h($groups->needsApproval) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
