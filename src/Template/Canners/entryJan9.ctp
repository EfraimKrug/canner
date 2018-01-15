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

#actions-sidebarX {
	border: 1px solid black;
	position: absolute;
	left: 50px;
	top: 150px;
	width: 399px;	
	height: 259px;
}

a {
	border: 2px solid black;
	color: blue;
}

.right {
	visibility: hidden;
}

</style>
<div id=hold>
<nav class="large-3 medium-4 columns" id="actions-sidebarX">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List what you have done'), ['controller' => 'CannerDones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Add something you have done'), ['controller' => 'CannerDones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List payments you have got'), ['controller' => 'CannerPayments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List things you need to do'), ['controller' => 'CannerTodos', 'action' => 'index']) ?></li>
    </ul>
</nav>
</div>
