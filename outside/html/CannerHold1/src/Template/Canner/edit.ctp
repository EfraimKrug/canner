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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $canner->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $canner->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canner'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="canner form large-10 medium-9 columns content">
    <?= $this->Form->create($canner) ?>
    <fieldset>
        <legend id=titleBar><?= __('Edit Canner') ?></legend>
	<div class="grid-x grid-padding-x">
        <?php
            echo $this->Form->control('First Name', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'First Name'));
            echo $this->Form->control('Last Name' , array('class' => 'large-4 medium-4 cell', 'placeholder' => 'Last Name'));
            echo $this->Form->control('EMail',array('class' => 'large-4 medium-4 cell', 'placeholder' => 'Email Address'));
	?>
	</div>
	<div class="grid-x grid-padding-x">
	<?php
            echo $this->Form->control('StartDate', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'Start Date'));
            echo $this->Form->control('Address', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'Address'));
            echo $this->Form->control('State', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'State'));
	?>
	</div>
 	<div class="grid-x grid-padding-x">  
	<?php
            echo $this->Form->control('Country', array('class' => 'large-4 medium-4 cell', 'placeholder' => 'Country'));
        ?>
    <?= $this->Form->button(__('Submit'), array('class' => 'button', 'style' => 'height: 45px;margin:20px')) ?>
    </div>
    <?= $this->Form->end() ?>
  </fieldset>
</div>

