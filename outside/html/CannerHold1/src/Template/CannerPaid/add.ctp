<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerPaid $cannerPaid
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Paid'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cannerPaid form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerPaid) ?>
    <fieldset>
        <legend><?= __('Add Canner Paid') ?></legend>
        <?php
            echo $this->Form->control('CannerID');
            echo $this->Form->control('Amount');
            echo $this->Form->control('DatePaid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
