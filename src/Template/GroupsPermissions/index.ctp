<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Groups Permission'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupsPermissions index large-9 medium-8 columns content">
    <h3><?= __('Groups Permissions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('permission_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tableName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allowInsert') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allowView') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allowEdit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allowDelete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupsPermissions as $groupsPermission): ?>
            <tr>
                <td><?= $groupsPermission->has('permission') ? $this->Html->link($groupsPermission->permission->permission_id, ['controller' => 'Permissions', 'action' => 'view', $groupsPermission->permission->permission_id]) : '' ?></td>
                <td><?= $groupsPermission->has('group') ? $this->Html->link($groupsPermission->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsPermission->group->id]) : '' ?></td>
                <td><?= h($groupsPermission->tableName) ?></td>
                <td><?= $this->Number->format($groupsPermission->allowInsert) ?></td>
                <td><?= $this->Number->format($groupsPermission->allowView) ?></td>
                <td><?= $this->Number->format($groupsPermission->allowEdit) ?></td>
                <td><?= $this->Number->format($groupsPermission->allowDelete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $groupsPermission->permission_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupsPermission->permission_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupsPermission->permission_id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsPermission->permission_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
