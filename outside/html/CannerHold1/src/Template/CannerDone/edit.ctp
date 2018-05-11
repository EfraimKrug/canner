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
                ['action' => 'delete', $cannerDone->CannerID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDone->CannerID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canner Done'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cannerDone form large-9 medium-8 columns content">
    <?= $this->Form->create($cannerDone) ?>
    <fieldset>
        <legend><?= __('Edit Canner Done') ?></legend>
        <?php
            echo $this->Form->control('OwnerID');
            echo $this->Form->control('DateDone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
