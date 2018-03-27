<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner[]|\Cake\Collection\CollectionInterface $canner
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Canner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<style>
   .wide {
       width:350px;
       color:red;
   }
   .wide10 {
	width:40px;
	color:blue;
   }
</style>
<div class="canner index large-9 medium-8 columns content">
    <h3><?= __('Canner') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('ID') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('LName') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('EMail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Start Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('State') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('Country') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
		if(!isset($canner)){
			echo "Nope!";
			return;
		}

		foreach ($canner as $canner): ?>

            <tr>
                <td class="actions"><?= $this->Html->link(__($canner->FName . ' ' . $canner->LName), ['action' => 'view', $canner->ID]) ?></td>
                <td class=wide><?= h($canner->EMail) ?></td>
                <td class=wide10><?= h($canner->StartDate) ?></td>
                <td><?= h($canner->Address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $canner->ID]) ?><br>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $canner->ID]) ?><br>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $canner->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $canner->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
