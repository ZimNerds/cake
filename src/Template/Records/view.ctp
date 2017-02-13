<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($record->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($record->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($record->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($record->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($record->users)): ?>
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
            <?php foreach ($record->users as $users): ?>
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
</div>
