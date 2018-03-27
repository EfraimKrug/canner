<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner $canner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Contracts'), ['controller' => 'CannerContracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Contract'), ['controller' => 'CannerContracts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Payment'), ['controller' => 'CannerPayments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['controller' => 'CannerTodos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="canners form large-9 medium-8 columns content">
    <?= $this->Form->create($canner) ?>
    <fieldset>
        <legend><?= __('Add Canner') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('start_date', ['empty' => true]);
            echo $this->Form->control('address');
            echo $this->Form->control('state');
            echo $this->Form->control('country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
