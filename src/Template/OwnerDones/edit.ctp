<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OwnerDone $ownerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ownerDone->owner_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDone->owner_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ownerDones form large-9 medium-8 columns content">
    <?= $this->Form->create($ownerDone) ?>
    <fieldset>
        <legend><?= __('Edit Owner Done') ?></legend>
        <?php
            echo $this->Form->control('canner_id', ['options' => $canners]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
