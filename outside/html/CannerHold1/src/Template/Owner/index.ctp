<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner[]|\Cake\Collection\CollectionInterface $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="owner index large-9 medium-8 columns content">
    <h3><?= __('Owner') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EMail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('StartDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('State') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($owner as $owner): ?>
            <tr>
                <td><?= $this->Number->format($owner->ID) ?></td>
                <td><?= h($owner->FName) ?></td>
                <td><?= h($owner->LName) ?></td>
                <td><?= h($owner->EMail) ?></td>
                <td><?= h($owner->StartDate) ?></td>
                <td><?= h($owner->Address) ?></td>
                <td><?= h($owner->State) ?></td>
                <td><?= h($owner->Country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $owner->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $owner->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $owner->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->ID)]) ?>
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
