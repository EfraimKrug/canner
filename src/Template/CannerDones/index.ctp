<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDone[]|\Cake\Collection\CollectionInterface $cannerDones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['controller' => 'CannerTodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cannerDones index large-9 medium-8 columns content">
    <h3><?= __('Canner Dones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cannerDones as $cannerDone): ?>
            <tr>
                <td><?= $this->Number->format($cannerDone->id) ?></td>
                <td><?= $cannerDone->has('canner') ? $this->Html->link($cannerDone->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerDone->canner->id]) : '' ?></td>
                <td><?= $cannerDone->has('owner') ? $this->Html->link($cannerDone->owner->id, ['controller' => 'Owners', 'action' => 'view', $cannerDone->owner->id]) : '' ?></td>
                <td><?= h($cannerDone->date_done) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cannerDone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cannerDone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cannerDone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDone->id)]) ?>
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
