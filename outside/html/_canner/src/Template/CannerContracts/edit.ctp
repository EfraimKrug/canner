<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerContract $cannerContract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cannerContract->canner_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cannerContract->canner_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canner Contracts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cannerContracts form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerContract) ?>
    <fieldset>
        <legend><?= __('Edit Canner Contract') ?></legend>
        <?php
            echo $this->Form->control('pay_day');
            echo $this->Form->control('pay_amount');
            echo $this->Form->control('previous_pay_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
