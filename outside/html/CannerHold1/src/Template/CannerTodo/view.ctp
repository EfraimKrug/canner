<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerTodo $cannerTodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Todo'), ['action' => 'edit', $cannerTodo->CannerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Todo'), ['action' => 'delete', $cannerTodo->CannerID], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerTodo->CannerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Todo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerTodo view large-9 medium-8 columns content">
    <h3><?= h($cannerTodo->CannerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CannerID') ?></th>
            <td><?= $this->Number->format($cannerTodo->CannerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OwnerID') ?></th>
            <td><?= $this->Number->format($cannerTodo->OwnerID) ?></td>
        </tr>
    </table>
</div>
