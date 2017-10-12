<div class="patients view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Patient'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Patient'), array('action' => 'edit', $patient['Patient']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Patient'), array('action' => 'delete', $patient['Patient']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Patients'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Patient'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cities'), array('controller' => 'cities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New City'), array('controller' => 'cities', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($patient['Patient']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($patient['Patient']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Document'); ?></th>
		<td>
			<?php echo h($patient['Patient']['document']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($patient['Patient']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($patient['Patient']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Number'); ?></th>
		<td>
			<?php echo h($patient['Patient']['number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Complement'); ?></th>
		<td>
			<?php echo h($patient['Patient']['complement']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Neighborhood'); ?></th>
		<td>
			<?php echo h($patient['Patient']['neighborhood']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone Message'); ?></th>
		<td>
			<?php echo h($patient['Patient']['phone_message']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name Message'); ?></th>
		<td>
			<?php echo h($patient['Patient']['name_message']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Absence'); ?></th>
		<td>
			<?php echo h($patient['Patient']['absence']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo $this->Html->link($patient['City']['name'], array('controller' => 'cities', 'action' => 'view', $patient['City']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Disabled'); ?></th>
		<td>
			<?php echo h($patient['Patient']['disabled']); ?>
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
	<?php if (!empty($patient['Stop'])): ?>
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
	<?php foreach ($patient['Stop'] as $stop): ?>
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
