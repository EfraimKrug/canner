<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerPaid $ownerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Paid'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ownerPaid form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerPaid) ?>
    <fieldset>
        <legend><?= __('Add Owner Paid') ?></legend>
        <?php
            echo $this->Form->control('OwnerID');
            echo $this->Form->control('Amount');
            echo $this->Form->control('DatePaid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
