<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerTodo $cannerTodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Todo'), ['action' => 'edit', $cannerTodo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Todo'), ['action' => 'delete', $cannerTodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerTodo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerTodos view large-9 medium-8 columns content">
    <h3><?= h($cannerTodo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Canner') ?></th>
            <td><?= $cannerTodo->has('canner') ? $this->Html->link($cannerTodo->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerTodo->canner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= $cannerTodo->has('owner') ? $this->Html->link($cannerTodo->owner->id, ['controller' => 'Owners', 'action' => 'view', $cannerTodo->owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cannerTodo->id) ?></td>
        </tr>
    </table>
</div>
