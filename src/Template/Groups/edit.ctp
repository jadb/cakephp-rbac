<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $group->id],
				['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]
			)
		?></li>
		<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="groups form large-10 medium-9 columns">
	<?= $this->Form->create($group); ?>
	<fieldset>
		<legend><?= __('Edit Group') ?></legend>
		<?php
			echo $this->Form->input('title');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
