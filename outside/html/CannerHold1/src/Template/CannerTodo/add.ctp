<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CannerTodo $cannerTodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Todo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cannerTodo form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerTodo) ?>
    <fieldset>
        <legend><?= __('Add Canner Todo') ?></legend>
        <?php
            echo $this->Form->control('OwnerID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
