<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPaid $ownerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Paid'), ['action' => 'edit', $ownerPaid->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Paid'), ['action' => 'delete', $ownerPaid->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPaid->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Paid'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Paid'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerPaid view large-9 medium-8 columns content">
    <h3><?= h($ownerPaid->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DatePaid') ?></th>
            <td><?= h($ownerPaid->DatePaid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($ownerPaid->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OwnerID') ?></th>
            <td><?= $this->Number->format($ownerPaid->OwnerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($ownerPaid->Amount) ?></td>
        </tr>
    </table>
</div>
