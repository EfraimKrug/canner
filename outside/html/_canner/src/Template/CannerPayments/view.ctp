<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerPayment $cannerPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Payment'), ['action' => 'edit', $cannerPayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Payment'), ['action' => 'delete', $cannerPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerPayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerPayments view large-9 medium-8 columns content">
    <h3><?= h($cannerPayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canner') ?></th>
            <td><?= $cannerPayment->has('canner') ? $this->Html->link($cannerPayment->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerPayment->canner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cannerPayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($cannerPayment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Paid') ?></th>
            <td><?= h($cannerPayment->date_paid) ?></td>
        </tr>
    </table>
</div>
