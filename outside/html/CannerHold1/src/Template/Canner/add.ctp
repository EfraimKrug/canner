<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner $canner
 */
?>
<style>

        #actions-sidebar  {
                background-color:#007788;
        }

        #titleBar {
                background-color: red;
                color: yellow;
                width: 125px;
        }

</style>

<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="canner form large-9 medium-8 columns content">
    <?= $this->Form->create($canner) ?>
    <fieldset>
        <legend id=titleBar><?= __('Add Canner') ?></legend>
	<div class="grid-x grid-padding-x">
        <?php
            echo $this->Form->control('FName' , array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
            echo $this->Form->control('LName', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
            echo $this->Form->control('EMail', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
	?>
	</div>
	<div class="grid-x grid-padding-x">
	<?php
            echo $this->Form->control('StartDate', array('style' => 'width:125px', 'value' => date("M d, Y")));
            echo $this->Form->control('Address', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
            echo $this->Form->control('State', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
	?>
	</div>
	<div class="grid-x grid-padding-x">
	<?php
            echo $this->Form->control('Country', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
        ?>
    <?= $this->Form->button(__('Submit'), array('class' => 'button', 'style' => 'height: 45px;margin:20px')) ?>
    </fieldset>
    </div>
    <?= $this->Form->end() ?>
</div>
