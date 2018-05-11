<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner[]|\Cake\Collection\CollectionInterface $canners
 */
?>
<?= $this->Html->css('entry.css') ?>
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
