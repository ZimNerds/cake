<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Record'), ['action' => 'edit', $usersRecord->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Record'), ['action' => 'delete', $usersRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRecord->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Record'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersRecords view large-9 medium-8 columns content">
    <h3><?= h($usersRecord->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TableName') ?></th>
            <td><?= h($usersRecord->tableName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersRecord->has('user') ? $this->Html->link($usersRecord->user->id, ['controller' => 'Users', 'action' => 'view', $usersRecord->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $usersRecord->has('group') ? $this->Html->link($usersRecord->group->name, ['controller' => 'Groups', 'action' => 'view', $usersRecord->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersRecord->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usersRecord->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usersRecord->modified) ?></td>
        </tr>
    </table>
</div>
