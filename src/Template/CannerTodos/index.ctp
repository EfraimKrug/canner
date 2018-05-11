<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerTodo[]|\Cake\Collection\CollectionInterface $cannerTodos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['controller' => 'CannerTodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cannerTodos index large-9 medium-8 columns content">
    <h3><?= __('Canner Todos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cannerTodos as $cannerTodo): ?>
            <tr>
                <td><?= $this->Number->format($cannerTodo->id) ?></td>
                <td><?= $cannerTodo->has('canner') ? $this->Html->link($cannerTodo->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerTodo->canner->id]) : '' ?></td>
                <td><?= $cannerTodo->has('owner') ? $this->Html->link($cannerTodo->owner->id, ['controller' => 'Owners', 'action' => 'view', $cannerTodo->owner->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cannerTodo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cannerTodo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cannerTodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerTodo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
