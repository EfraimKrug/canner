<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDeal $cannerDeal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Deal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cannerDeal form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerDeal) ?>
    <fieldset>
        <legend><?= __('Add Canner Deal') ?></legend>
        <?php
            echo $this->Form->control('PayDay');
            echo $this->Form->control('PayAmount');
            echo $this->Form->control('PreviousPayAmount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
