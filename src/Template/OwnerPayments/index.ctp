<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPayment[]|\Cake\Collection\CollectionInterface $ownerPayments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['controller' => 'OwnerContracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Owner Payment'), ['controller' => 'OwnerPayments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerPayments index large-9 medium-8 columns content">
    <h3><?= __('Owner Payments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_paid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerPayments as $ownerPayment): ?>
            <tr>
                <td><?= $this->Number->format($ownerPayment->id) ?></td>
                <td><?= $ownerPayment->has('owner') ? $this->Html->link($ownerPayment->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerPayment->owner->id]) : '' ?></td>
                <td><?= $this->Number->format($ownerPayment->amount) ?></td>
                <td><?= h($ownerPayment->date_paid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerPayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerPayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPayment->id)]) ?>
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
