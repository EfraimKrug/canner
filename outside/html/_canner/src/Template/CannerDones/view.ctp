<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDone $cannerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Done'), ['action' => 'edit', $cannerDone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Done'), ['action' => 'delete', $cannerDone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Done'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerDones view large-9 medium-8 columns content">
    <h3><?= h($cannerDone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canner') ?></th>
            <td><?= $cannerDone->has('canner') ? $this->Html->link($cannerDone->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerDone->canner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $cannerDone->has('owner') ? $this->Html->link($cannerDone->owner->id, ['controller' => 'Owners', 'action' => 'view', $cannerDone->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cannerDone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Done') ?></th>
            <td><?= h($cannerDone->date_done) ?></td>
        </tr>
    </table>
</div>
