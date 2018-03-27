<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDeal[]|\Cake\Collection\CollectionInterface $ownerDeal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner Deal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerDeal index large-9 medium-8 columns content">
    <h3><?= __('Owner Deal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('OwnerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PayDay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PayAmount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PreviousPayAmount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateChanged') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerDeal as $ownerDeal): ?>
            <tr>
                <td><?= $this->Number->format($ownerDeal->OwnerID) ?></td>
                <td><?= $this->Number->format($ownerDeal->PayDay) ?></td>
                <td><?= $this->Number->format($ownerDeal->PayAmount) ?></td>
                <td><?= $this->Number->format($ownerDeal->PreviousPayAmount) ?></td>
                <td><?= h($ownerDeal->DateChanged) ?></td>
                <td><?= h($ownerDeal->Notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerDeal->OwnerID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerDeal->OwnerID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerDeal->OwnerID], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDeal->OwnerID)]) ?>
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
