<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerContract $ownerContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Contract'), ['action' => 'edit', $ownerContract->owner_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Contract'), ['action' => 'delete', $ownerContract->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerContract->owner_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerContracts view large-9 medium-8 columns content">
    <h3><?= h($ownerContract->owner_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $ownerContract->has('owner') ? $this->Html->link($ownerContract->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerContract->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($ownerContract->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Day') ?></th>
            <td><?= $this->Number->format($ownerContract->pay_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Amount') ?></th>
            <td><?= $this->Number->format($ownerContract->pay_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previous Pay Amount') ?></th>
            <td><?= $this->Number->format($ownerContract->previous_pay_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Changed') ?></th>
            <td><?= h($ownerContract->date_changed) ?></td>
        </tr>
    </table>
</div>
