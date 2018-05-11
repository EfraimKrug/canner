<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerContract[]|\Cake\Collection\CollectionInterface $cannerContracts
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
<div class="cannerContracts index large-9 medium-8 columns content">
    <h3><?= __('Canner Contracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('canner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previous_pay_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_changed') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cannerContracts as $cannerContract): ?>
            <tr>
                <td><?= $cannerContract->has('canner') ? $this->Html->link($cannerContract->canner->id, ['controller' => 'Canners', 'action' => 'view', $cannerContract->canner->id]) : '' ?></td>
                <td><?= $this->Number->format($cannerContract->pay_day) ?></td>
                <td><?= $this->Number->format($cannerContract->pay_amount) ?></td>
                <td><?= $this->Number->format($cannerContract->previous_pay_amount) ?></td>
                <td><?= h($cannerContract->date_changed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cannerContract->canner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cannerContract->canner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cannerContract->canner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerContract->canner_id)]) ?>
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
