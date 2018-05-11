<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Canners') ?></h4>
        <?php if (!empty($user->canners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->canners as $canners): ?>
            <tr>
                <td><?= h($canners->id) ?></td>
                <td><?= h($canners->user_id) ?></td>
                <td><?= h($canners->first_name) ?></td>
                <td><?= h($canners->last_name) ?></td>
                <td><?= h($canners->email) ?></td>
                <td><?= h($canners->start_date) ?></td>
                <td><?= h($canners->address) ?></td>
                <td><?= h($canners->state) ?></td>
                <td><?= h($canners->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Canners', 'action' => 'view', $canners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Canners', 'action' => 'edit', $canners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Canners', 'action' => 'delete', $canners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Owners') ?></h4>
        <?php if (!empty($user->owners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->owners as $owners): ?>
            <tr>
                <td><?= h($owners->id) ?></td>
                <td><?= h($owners->user_id) ?></td>
                <td><?= h($owners->first_name) ?></td>
                <td><?= h($owners->last_name) ?></td>
                <td><?= h($owners->email) ?></td>
                <td><?= h($owners->start_date) ?></td>
                <td><?= h($owners->address) ?></td>
                <td><?= h($owners->state) ?></td>
                <td><?= h($owners->country) ?></td>
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
</div>
