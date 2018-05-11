<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => '../index.php/users']) ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => '../index.php/canners/index']) ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => '../index.php/canners/add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => '../index.php/owners/index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => '../index.php/owners/add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Join in!') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
