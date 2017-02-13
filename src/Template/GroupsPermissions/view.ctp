<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Groups Permission'), ['action' => 'edit', $groupsPermission->permission_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groups Permission'), ['action' => 'delete', $groupsPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsPermission->permission_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groups Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupsPermissions view large-9 medium-8 columns content">
    <h3><?= h($groupsPermission->permission_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Permission') ?></th>
            <td><?= $groupsPermission->has('permission') ? $this->Html->link($groupsPermission->permission->permission_id, ['controller' => 'Permissions', 'action' => 'view', $groupsPermission->permission->permission_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $groupsPermission->has('group') ? $this->Html->link($groupsPermission->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsPermission->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TableName') ?></th>
            <td><?= h($groupsPermission->tableName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowInsert') ?></th>
            <td><?= $this->Number->format($groupsPermission->allowInsert) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowView') ?></th>
            <td><?= $this->Number->format($groupsPermission->allowView) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowEdit') ?></th>
            <td><?= $this->Number->format($groupsPermission->allowEdit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AllowDelete') ?></th>
            <td><?= $this->Number->format($groupsPermission->allowDelete) ?></td>
        </tr>
    </table>
</div>
