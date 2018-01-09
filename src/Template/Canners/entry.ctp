<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner[]|\Cake\Collection\CollectionInterface $canners
 */
?>
<style>
#hold {
	height: 299px;
}

h1 {
	border: 2px solid black;
	text-align:center;
	visibility:hidden;
}

.top-bar-section .top-bar .right{
	width:0px;
	visibility:hidden;
}

.heading {
	border: 2px solid black;
	text-align: center;
}

#actions-sidebar {
	border: 1px solid black;
	position: absolute;
	left: 250px;
	top: 250px;
	width: 399px;	
	height: 99px;
}
</style>
<div id=hold>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
    </ul>
</nav>
</div>
