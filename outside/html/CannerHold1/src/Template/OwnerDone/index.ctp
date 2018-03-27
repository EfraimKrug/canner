<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDone[]|\Cake\Collection\CollectionInterface $ownerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerDone index large-9 medium-8 columns content">
    <h3><?= __('Owner Done') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('OwnerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CannerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateDone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerDone as $ownerDone): ?>
            <tr>
                <td><?= $this->Number->format($ownerDone->OwnerID) ?></td>
                <td><?= $this->Number->format($ownerDone->CannerID) ?></td>
                <td><?= h($ownerDone->DateDone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerDone->OwnerID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerDone->OwnerID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerDone->OwnerID], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDone->OwnerID)]) ?>
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
