<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $owner->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $owner->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Owner'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="owner form large-9 medium-8 columns content">
    <?= $this->Form->create($owner) ?>
    <fieldset>
        <legend><?= __('Edit Owner') ?></legend>
        <?php
            echo $this->Form->control('FName');
            echo $this->Form->control('LName');
            echo $this->Form->control('EMail');
            echo $this->Form->control('StartDate');
            echo $this->Form->control('Address');
            echo $this->Form->control('State');
            echo $this->Form->control('Country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
