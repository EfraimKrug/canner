<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerContract[]|\Cake\Collection\CollectionInterface $ownerContracts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['controller' => 'OwnerContracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Payments'), ['controller' => 'OwnerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Payment'), ['controller' => 'OwnerPayments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerContracts index large-9 medium-8 columns content">
    <h3><?= __('Owner Contracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previous_pay_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_changed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ownerContracts as $ownerContract): ?>
            <tr>
                <td><?= $ownerContract->has('owner') ? $this->Html->link($ownerContract->owner->id, ['controller' => 'Owners', 'action' => 'view', $ownerContract->owner->id]) : '' ?></td>
                <td><?= $this->Number->format($ownerContract->pay_day) ?></td>
                <td><?= $this->Number->format($ownerContract->pay_amount) ?></td>
                <td><?= $this->Number->format($ownerContract->previous_pay_amount) ?></td>
                <td><?= h($ownerContract->date_changed) ?></td>
                <td><?= h($ownerContract->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ownerContract->owner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ownerContract->owner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ownerContract->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerContract->owner_id)]) ?>
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
