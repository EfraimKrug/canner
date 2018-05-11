<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Dones'), ['controller' => 'CannerDones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Done'), ['controller' => 'CannerDones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Canner Todos'), ['controller' => 'CannerTodos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Canner Todo'), ['controller' => 'CannerTodos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Contracts'), ['controller' => 'OwnerContracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Contract'), ['controller' => 'OwnerContracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Dones'), ['controller' => 'OwnerDones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Done'), ['controller' => 'OwnerDones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Owner Payments'), ['controller' => 'OwnerPayments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner Payment'), ['controller' => 'OwnerPayments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="owners view large-9 medium-8 columns content">
    <h3><?= h($owner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $owner->has('user') ? $this->Html->link($owner->user->id, ['controller' => 'Users', 'action' => 'view', $owner->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($owner->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($owner->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($owner->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($owner->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($owner->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($owner->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($owner->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($owner->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Canner Dones') ?></h4>
        <?php if (!empty($owner->canner_dones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Date Done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->canner_dones as $cannerDones): ?>
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
        <h4><?= __('Related Canner Todos') ?></h4>
        <?php if (!empty($owner->canner_todos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->canner_todos as $cannerTodos): ?>
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
        <h4><?= __('Related Owner Contracts') ?></h4>
        <?php if (!empty($owner->owner_contracts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Pay Day') ?></th>
                <th scope="col"><?= __('Pay Amount') ?></th>
                <th scope="col"><?= __('Previous Pay Amount') ?></th>
                <th scope="col"><?= __('Date Changed') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->owner_contracts as $ownerContracts): ?>
            <tr>
                <td><?= h($ownerContracts->owner_id) ?></td>
                <td><?= h($ownerContracts->pay_day) ?></td>
                <td><?= h($ownerContracts->pay_amount) ?></td>
                <td><?= h($ownerContracts->previous_pay_amount) ?></td>
                <td><?= h($ownerContracts->date_changed) ?></td>
                <td><?= h($ownerContracts->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OwnerContracts', 'action' => 'view', $ownerContracts->owner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OwnerContracts', 'action' => 'edit', $ownerContracts->owner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OwnerContracts', 'action' => 'delete', $ownerContracts->owner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerContracts->owner_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Owner Dones') ?></h4>
        <?php if (!empty($owner->owner_dones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Canner Id') ?></th>
                <th scope="col"><?= __('Date Done') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->owner_dones as $ownerDones): ?>
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
    <div class="related">
        <h4><?= __('Related Owner Payments') ?></h4>
        <?php if (!empty($owner->owner_payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Owner Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Date Paid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->owner_payments as $ownerPayments): ?>
            <tr>
                <td><?= h($ownerPayments->id) ?></td>
                <td><?= h($ownerPayments->owner_id) ?></td>
                <td><?= h($ownerPayments->amount) ?></td>
                <td><?= h($ownerPayments->date_paid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OwnerPayments', 'action' => 'view', $ownerPayments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OwnerPayments', 'action' => 'edit', $ownerPayments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OwnerPayments', 'action' => 'delete', $ownerPayments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ownerPayments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
