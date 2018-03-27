<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDone $cannerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Done'), ['action' => 'edit', $cannerDone->CannerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Done'), ['action' => 'delete', $cannerDone->CannerID], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDone->CannerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Done'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Done'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerDone view large-9 medium-8 columns content">
    <h3><?= h($cannerDone->CannerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DateDone') ?></th>
            <td><?= h($cannerDone->DateDone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CannerID') ?></th>
            <td><?= $this->Number->format($cannerDone->CannerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OwnerID') ?></th>
            <td><?= $this->Number->format($cannerDone->OwnerID) ?></td>
        </tr>
    </table>
</div>
