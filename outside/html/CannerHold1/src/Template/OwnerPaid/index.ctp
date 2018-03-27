<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPaid[]|\Cake\Collection\CollectionInterface $ownerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner Paid'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerPaid index large-9 medium-8 columns content">
    <h3><?= __('Owner Paid') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OwnerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DatePaid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerPaid as $ownerPaid): ?>
            <tr>
                <td><?= $this->Number->format($ownerPaid->ID) ?></td>
                <td><?= $this->Number->format($ownerPaid->OwnerID) ?></td>
                <td><?= $this->Number->format($ownerPaid->Amount) ?></td>
                <td><?= h($ownerPaid->DatePaid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerPaid->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerPaid->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerPaid->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPaid->ID)]) ?>
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
