<div class="users form login">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Customer/Canner') ?></legend>
	<br>
	<?= $this->Form->radio('type', ['Customer','Canner']); ?>
    </fieldset>
<?= $this->Form->button(__('Joining...'), ['class' => 'button']); ?>
<?= $this->Form->end() ?>
</div>


