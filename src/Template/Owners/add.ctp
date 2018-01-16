<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Contracts'), ['controller' => 'CustomerContracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customer Dones'), ['controller' => 'CustomerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Done'), ['controller' => 'CustomerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Payments'), ['controller' => 'CustomerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customer Todos'), ['controller' => 'CustomerTodos', 'action' => 'index']) ?></li>
    </ul>
</nav>
<style>
::-webkit-input-placeholder {
    color: #FF0000;
    opacity: 1 !important; /* for older chrome versions. may no longer apply. */
}

:-moz-placeholder { /* Firefox 18- */
    color: #FF0000;
    opacity: 1 !important;
}

::-moz-placeholder {  /* Firefox 19+ */
    color: #FF0000;
    opacity: 1 !important;
}

:-ms-input-placeholder {  
   color: #FF0000;
}

.primary {
	color: red;
}

</style>
<div class="owners form large-9 medium-8 columns content">
    <?= $this->Form->create($owner) ?>
     <legend><?= __('We need a little information') ?></legend>
      <div class="grid-x grid-padding-x callout">
        <?php
            //echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('first_name', ['label' => false, 			
					'class' => 'primary callout large-4 medium-4 small-4 emk', 'placeholder' => 'First Name']);
            echo $this->Form->control('last_name', ['label' => false, 
					'class' => 'primary callout large-4 medium-4 small-4 cell', 'placeholder' => 'Last Name']);
            echo $this->Form->control('email', ['label' => false, 'placeholder' => 'email',
					'class' => 'primary callout large-4 medium-4 small-4 cell']);
	    $this->Form->templates(
  		['dateWidget' => '{{day}}{{month}}{{year}}']
		);
	    ?>
	    </div>
	    <div class="grid-x grid-padding-x callout">
	    <?php
		$start_date = date('Y-m-d H:i:s');
            //echo $this->Form->control('start_date', ['label' => false,
	    // 				'empty' => true, 'class' => 'primary callout large-8 medium-8 small-8 cell']);
            echo $this->Form->control('address', ['label' => false, 'placeholder' => 'address',
					'class' => 'primary callout large-4 medium-4 small-4 cell']);
            echo $this->Form->control('state', ['label' => false, 'placeholder' => 'state',
					'class' => 'primary callout large-4 medium-4 small-4 cell']);
	    ?>
	    </div>
 	    <div class="grid-x grid-padding-x callout">
	    <?php
            echo $this->Form->control('country', ['label' => false, 'placeholder' => 'country',
					'class' => 'primary callout large-4 medium-4 small-4 cell']);
        ?>
    	<?= $this->Form->button(__('Submit'), ['class' => 'button']) ?>
    	<?= $this->Form->end() ?>
    </div>
    </div>
</div>
