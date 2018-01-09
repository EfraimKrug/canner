<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerContract $ownerContract
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
<div class="ownerContracts form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerContract) ?>
    <fieldset>
        <legend><?= __('Add Owner Contract') ?></legend>
        <?php
            echo $this->Form->control('pay_day');
            echo $this->Form->control('pay_amount');
            echo $this->Form->control('previous_pay_amount');
            echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
