<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDone[]|\Cake\Collection\CollectionInterface $ownerDones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerDones index large-9 medium-8 columns content">
    <h3><?= __('Owner Dones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerDones as $ownerDone): ?>
            <tr>
                <td><?= $ownerDone->has('owner') ? $this->Html->link($ownerDone->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerDone->owner->id]) : '' ?></td>
                <td><?= $ownerDone->has('canner') ? $this->Html->link($ownerDone->canner->id, ['controller' => 'Canners', 'action' => 'view', $ownerDone->canner->id]) : '' ?></td>
                <td><?= h($ownerDone->date_done) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerDone->owner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerDone->owner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerDone->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDone->owner_id)]) ?>
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
