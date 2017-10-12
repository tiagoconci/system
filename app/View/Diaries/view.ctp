<div class="diaries view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Diary'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Diary'), array('action' => 'edit', $diary['Diary']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Diary'), array('action' => 'delete', $diary['Diary']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $diary['Diary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Diaries'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Diary'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cars'), array('controller' => 'cars', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Car'), array('controller' => 'cars', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Stops'), array('controller' => 'stops', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Stop'), array('controller' => 'stops', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($diary['Diary']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($diary['Diary']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City Time'); ?></th>
		<td>
			<?php echo h($diary['Diary']['city_time']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Enabled'); ?></th>
		<td>
			<?php echo h($diary['Diary']['enabled']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Car'); ?></th>
		<td>
			<?php echo $this->Html->link($diary['Car']['id'], array('controller' => 'cars', 'action' => 'view', $diary['Car']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($diary['User']['name'], array('controller' => 'users', 'action' => 'view', $diary['User']['id'])); ?>
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
	<h3><?php echo __('Related Stops'); ?></h3>
	<?php if (!empty($diary['Stop'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patient Id'); ?></th>
		<th><?php echo __('Companion'); ?></th>
		<th><?php echo __('Diary Id'); ?></th>
		<th><?php echo __('Establishment Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Absence'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($diary['Stop'] as $stop): ?>
		<tr>
			<td><?php echo $stop['id']; ?></td>
			<td><?php echo $stop['patient_id']; ?></td>
			<td><?php echo $stop['companion']; ?></td>
			<td><?php echo $stop['diary_id']; ?></td>
			<td><?php echo $stop['establishment_id']; ?></td>
			<td><?php echo $stop['start_time']; ?></td>
			<td><?php echo $stop['end_time']; ?></td>
			<td><?php echo $stop['absence']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'stops', 'action' => 'view', $stop['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'stops', 'action' => 'edit', $stop['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'stops', 'action' => 'delete', $stop['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $stop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Stop'), array('controller' => 'stops', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
