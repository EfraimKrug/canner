<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerDone $cannerDone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cannerDone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canners'), ['controller' => 'Canners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['controller' => 'Canners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cannerDones form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerDone) ?>
    <fieldset>
        <legend><?= __('Edit Canner Done') ?></legend>
        <?php
            echo $this->Form->control('canner_id', ['options' => $canners]);
            echo $this->Form->control('owner_id', ['options' => $owners]);
            echo $this->Form->control('date_done', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
