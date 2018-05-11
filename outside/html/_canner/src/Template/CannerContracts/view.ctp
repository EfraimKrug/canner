<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerContract $cannerContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Contract'), ['action' => 'edit', $cannerContract->canner_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Contract'), ['action' => 'delete', $cannerContract->canner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerContract->canner_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerContracts view large-9 medium-8 columns content">
    <h3><?= h($cannerContract->canner_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canner') ?></th>
            <td><?= $cannerContract->has('canner') ? $this->Html->link($cannerContract->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerContract->canner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Day') ?></th>
            <td><?= $this->Number->format($cannerContract->pay_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Amount') ?></th>
            <td><?= $this->Number->format($cannerContract->pay_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previous Pay Amount') ?></th>
            <td><?= $this->Number->format($cannerContract->previous_pay_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Changed') ?></th>
            <td><?= h($cannerContract->date_changed) ?></td>
        </tr>
    </table>
</div>
