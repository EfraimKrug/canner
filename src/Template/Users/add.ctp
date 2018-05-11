<div class="users form login">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Set up an account! ') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Joining...'), ['class' => 'button']); ?>
<?= $this->Form->end() ?>
</div>


