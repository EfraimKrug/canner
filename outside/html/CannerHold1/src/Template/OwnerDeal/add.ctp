<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDeal $ownerDeal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Deal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ownerDeal form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerDeal) ?>
    <fieldset>
        <legend><?= __('Add Owner Deal') ?></legend>
        <?php
            echo $this->Form->control('PayDay');
            echo $this->Form->control('PayAmount');
            echo $this->Form->control('PreviousPayAmount');
            echo $this->Form->control('Notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
