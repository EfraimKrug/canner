<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerPayment $cannerPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cannerPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerPayment) ?>
    <fieldset>
        <legend><?= __('Add Canner Payment') ?></legend>
        <?php
            echo $this->Form->control('canner_id', ['options' => $canners]);
            echo $this->Form->control('amount');
            echo $this->Form->control('date_paid', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
