<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDeal $ownerDeal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner Deal'), ['action' => 'edit', $ownerDeal->OwnerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner Deal'), ['action' => 'delete', $ownerDeal->OwnerID], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDeal->OwnerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Owner Deal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Deal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ownerDeal view large-9 medium-8 columns content">
    <h3><?= h($ownerDeal->OwnerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DateChanged') ?></th>
            <td><?= h($ownerDeal->DateChanged) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($ownerDeal->Notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OwnerID') ?></th>
            <td><?= $this->Number->format($ownerDeal->OwnerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PayDay') ?></th>
            <td><?= $this->Number->format($ownerDeal->PayDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PayAmount') ?></th>
            <td><?= $this->Number->format($ownerDeal->PayAmount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PreviousPayAmount') ?></th>
            <td><?= $this->Number->format($ownerDeal->PreviousPayAmount) ?></td>
        </tr>
    </table>
</div>
