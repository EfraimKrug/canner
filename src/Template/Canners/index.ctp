<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner[]|\Cake\Collection\CollectionInterface $canners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="canners index large-9 medium-8 columns content">
    <h3><?= __('Canners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
          	<!-- 
	     	<th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
		-->
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('email') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('start_date') ?> -->
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($canners as $canner): ?>
            <tr>
                <td><?= $this->Number->format($canner->id) ?></td>
                <td><?= $canner->has('user') ? $this->Html->link($canner->user->id, ['controller' => 'Users', 'action' => 'view', $canner->user->id]) : '' ?></td>
                <td><?= h($canner->first_name) ?></td>
                <td><?= h($canner->last_name) ?></td>
                <td><?= h($canner->email) ?></td>
                <td><?= h($canner->start_date) ?></td>
                <td><?= h($canner->address) ?></td>
                <td><?= h($canner->state) ?></td>
                <td><?= h($canner->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $canner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $canner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $canner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canner->id)]) ?>
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
