<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canner $canner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Canner'), ['action' => 'edit', $canner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Canner'), ['action' => 'delete', $canner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $canner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Canners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Contracts'), ['controller' => 'CannerContracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Contract'), ['controller' => 'CannerContracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Payments'), ['controller' => 'CannerPayments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Payment'), ['controller' => 'CannerPayments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['controller' => 'CannerTodos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="canners view large-9 medium-8 columns content">
    <h3><?= h($canner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $canner->has('user') ? $this->Html->link($canner->user->id, ['controller' => 'Users', 'action' => 'view', $canner->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($canner->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($canner->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($canner->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($canner->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($canner->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($canner->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($canner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($canner->start_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Canner Contracts') ?></h4>
        <?php if (!empty($canner->canner_contracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Pay Day') ?></th>
                <th scope="col"><?= __('Pay Amount') ?></th>
                <th scope="col"><?= __('Previous Pay Amount') ?></th>
                <th scope="col"><?= __('Date Changed') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canner->canner_contracts as $cannerContracts): ?>
            <tr>
                <td><?= h($cannerContracts->canner_id) ?></td>
                <td><?= h($cannerContracts->pay_day) ?></td>
                <td><?= h($cannerContracts->pay_amount) ?></td>
                <td><?= h($cannerContracts->previous_pay_amount) ?></td>
                <td><?= h($cannerContracts->date_changed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CannerContracts', 'action' => 'view', $cannerContracts->canner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CannerContracts', 'action' => 'edit', $cannerContracts->canner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CannerContracts', 'action' => 'delete', $cannerContracts->canner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerContracts->canner_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Canner Dones') ?></h4>
        <?php if (!empty($canner->canner_dones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Date Done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canner->canner_dones as $cannerDones): ?>
            <tr>
                <td><?= h($cannerDones->id) ?></td>
                <td><?= h($cannerDones->canner_id) ?></td>
                <td><?= h($cannerDones->owner_id) ?></td>
                <td><?= h($cannerDones->date_done) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CannerDones', 'action' => 'view', $cannerDones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CannerDones', 'action' => 'edit', $cannerDones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CannerDones', 'action' => 'delete', $cannerDones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerDones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Canner Payments') ?></h4>
        <?php if (!empty($canner->canner_payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Date Paid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canner->canner_payments as $cannerPayments): ?>
            <tr>
                <td><?= h($cannerPayments->id) ?></td>
                <td><?= h($cannerPayments->canner_id) ?></td>
                <td><?= h($cannerPayments->amount) ?></td>
                <td><?= h($cannerPayments->date_paid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CannerPayments', 'action' => 'view', $cannerPayments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CannerPayments', 'action' => 'edit', $cannerPayments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CannerPayments', 'action' => 'delete', $cannerPayments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerPayments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Canner Todos') ?></h4>
        <?php if (!empty($canner->canner_todos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canner->canner_todos as $cannerTodos): ?>
            <tr>
                <td><?= h($cannerTodos->id) ?></td>
                <td><?= h($cannerTodos->canner_id) ?></td>
                <td><?= h($cannerTodos->owner_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CannerTodos', 'action' => 'view', $cannerTodos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CannerTodos', 'action' => 'edit', $cannerTodos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CannerTodos', 'action' => 'delete', $cannerTodos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cannerTodos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Owner Dones') ?></h4>
        <?php if (!empty($canner->owner_dones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Date Done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($canner->owner_dones as $ownerDones): ?>
            <tr>
                <td><?= h($ownerDones->owner_id) ?></td>
                <td><?= h($ownerDones->canner_id) ?></td>
                <td><?= h($ownerDones->date_done) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OwnerDones', 'action' => 'view', $ownerDones->owner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OwnerDones', 'action' => 'edit', $ownerDones->owner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OwnerDones', 'action' => 'delete', $ownerDones->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerDones->owner_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
