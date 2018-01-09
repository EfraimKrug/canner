<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDone $ownerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Done'), ['action' => 'edit', $ownerDone->owner_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Done'), ['action' => 'delete', $ownerDone->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDone->owner_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Done'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerDones view large-9 medium-8 columns content">
    <h3><?= h($ownerDone->owner_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $ownerDone->has('owner') ? $this->Html->link($ownerDone->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerDone->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canner') ?></th>
            <td><?= $ownerDone->has('canner') ? $this->Html->link($ownerDone->canner->id, ['controller' => 'Canners', 'action' => 'view', $ownerDone->canner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Done') ?></th>
            <td><?= h($ownerDone->date_done) ?></td>
        </tr>
    </table>
</div>
