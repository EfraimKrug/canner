<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerPaid $cannerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Paid'), ['action' => 'edit', $cannerPaid->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Paid'), ['action' => 'delete', $cannerPaid->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerPaid->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Paid'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Paid'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerPaid view large-9 medium-8 columns content">
    <h3><?= h($cannerPaid->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DatePaid') ?></th>
            <td><?= h($cannerPaid->DatePaid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($cannerPaid->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CannerID') ?></th>
            <td><?= $this->Number->format($cannerPaid->CannerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($cannerPaid->Amount) ?></td>
        </tr>
    </table>
</div>
