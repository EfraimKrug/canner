<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner $canner
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner'), ['action' => 'edit', $canner->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner'), ['action' => 'delete', $canner->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $canner->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Canner'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="canner view large-10 medium-10 columns content">
    <h3><?= h($canner->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FName') ?></th>
            <td><?= h($canner->FName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LName') ?></th>
            <td><?= h($canner->LName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMail') ?></th>
            <td><?= h($canner->EMail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StartDate') ?></th>
            <td><?= h($canner->StartDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($canner->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($canner->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($canner->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($canner->ID) ?></td>
        </tr>
    </table>
</div>
