<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPayment $ownerPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Payment'), ['action' => 'edit', $ownerPayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Payment'), ['action' => 'delete', $ownerPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerPayments view large-9 medium-8 columns content">
    <h3><?= h($ownerPayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $ownerPayment->has('owner') ? $this->Html->link($ownerPayment->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerPayment->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ownerPayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($ownerPayment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Paid') ?></th>
            <td><?= h($ownerPayment->date_paid) ?></td>
        </tr>
    </table>
</div>
