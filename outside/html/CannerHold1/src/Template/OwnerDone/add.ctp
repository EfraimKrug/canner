<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDone $ownerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owner Done'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ownerDone form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerDone) ?>
    <fieldset>
        <legend><?= __('Add Owner Done') ?></legend>
        <?php
            echo $this->Form->control('CannerID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
