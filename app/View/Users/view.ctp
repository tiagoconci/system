<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit User'), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete User'), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Diaries'), array('controller' => 'diaries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Document'); ?></th>
		<td>
			<?php echo h($user['User']['document']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Inactive'); ?></th>
		<td>
			<?php echo h($user['User']['inactive']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo h($user['User']['user']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Role'); ?></th>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Password'); ?></th>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Diaries'); ?></h3>
	<?php if (!empty($user['Diary'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('City Time'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
		<th><?php echo __('Car Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($user['Diary'] as $diary): ?>
		<tr>
			<td><?php echo $diary['id']; ?></td>
			<td><?php echo $diary['date']; ?></td>
			<td><?php echo $diary['city_time']; ?></td>
			<td><?php echo $diary['enabled']; ?></td>
			<td><?php echo $diary['car_id']; ?></td>
			<td><?php echo $diary['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'diaries', 'action' => 'view', $diary['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'diaries', 'action' => 'edit', $diary['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'diaries', 'action' => 'delete', $diary['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $diary['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
