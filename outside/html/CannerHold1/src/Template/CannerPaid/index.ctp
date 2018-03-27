<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerPaid[]|\Cake\Collection\CollectionInterface $cannerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Canner Paid'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cannerPaid index large-9 medium-8 columns content">
    <h3><?= __('Canner Paid') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CannerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DatePaid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cannerPaid as $cannerPaid): ?>
            <tr>
                <td><?= $this->Number->format($cannerPaid->ID) ?></td>
                <td><?= $this->Number->format($cannerPaid->CannerID) ?></td>
                <td><?= $this->Number->format($cannerPaid->Amount) ?></td>
                <td><?= h($cannerPaid->DatePaid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cannerPaid->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cannerPaid->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cannerPaid->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerPaid->ID)]) ?>
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
