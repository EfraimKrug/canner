<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDeal $cannerDeal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner Deal'), ['action' => 'edit', $cannerDeal->CannerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner Deal'), ['action' => 'delete', $cannerDeal->CannerID], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDeal->CannerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner Deal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Deal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cannerDeal view large-9 medium-8 columns content">
    <h3><?= h($cannerDeal->CannerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DateChanged') ?></th>
            <td><?= h($cannerDeal->DateChanged) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CannerID') ?></th>
            <td><?= $this->Number->format($cannerDeal->CannerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PayDay') ?></th>
            <td><?= $this->Number->format($cannerDeal->PayDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PayAmount') ?></th>
            <td><?= $this->Number->format($cannerDeal->PayAmount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PreviousPayAmount') ?></th>
            <td><?= $this->Number->format($cannerDeal->PreviousPayAmount) ?></td>
        </tr>
    </table>
</div>
