<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerContract $ownerContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ownerContract->owner_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ownerContract->owner_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerContracts form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerContract) ?>
    <fieldset>
        <legend><?= __('Edit Owner Contract') ?></legend>
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
