<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPayment $ownerPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ownerPayment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPayment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owner Payments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerPayment) ?>
    <fieldset>
        <legend><?= __('Edit Owner Payment') ?></legend>
        <?php
            echo $this->Form->control('owner_id', ['options' => $owners]);
            echo $this->Form->control('amount');
            echo $this->Form->control('date_paid', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
