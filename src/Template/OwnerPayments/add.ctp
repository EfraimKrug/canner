<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPayment $ownerPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['controller' => 'OwnerContracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Payments'), ['controller' => 'OwnerPayments', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ownerPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerPayment) ?>
    <fieldset>
        <legend><?= __('Add Owner Payment') ?></legend>
        <?php
            echo $this->Form->control('owner_id', ['options' => $owners]);
            echo $this->Form->control('amount');
            echo $this->Form->control('date_paid', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
