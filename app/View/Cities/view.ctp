<div class="cities view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('City'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit City'), array('action' => 'edit', $city['City']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete City'), array('action' => 'delete', $city['City']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cities'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New City'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Destinations'), array('controller' => 'destinations', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Destination'), array('controller' => 'destinations', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Establishments'), array('controller' => 'establishments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Establishment'), array('controller' => 'establishments', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Patients'), array('controller' => 'patients', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Patient'), array('controller' => 'patients', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Disabled'); ?></th>
		<td>
			<?php echo h($city['City']['disabled']); ?>
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
	<h3><?php echo __('Related Destinations'); ?></h3>
	<?php if (!empty($city['Destination'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Disabled'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($city['Destination'] as $destination): ?>
		<tr>
			<td><?php echo $destination['id']; ?></td>
			<td><?php echo $destination['city_id']; ?></td>
			<td><?php echo $destination['time']; ?></td>
			<td><?php echo $destination['disabled']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'destinations', 'action' => 'view', $destination['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'destinations', 'action' => 'edit', $destination['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'destinations', 'action' => 'delete', $destination['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $destination['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Destination'), array('controller' => 'destinations', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Establishments'); ?></h3>
	<?php if (!empty($city['Establishment'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Complement'); ?></th>
		<th><?php echo __('Neighborhood'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Disabled'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($city['Establishment'] as $establishment): ?>
		<tr>
			<td><?php echo $establishment['id']; ?></td>
			<td><?php echo $establishment['name']; ?></td>
			<td><?php echo $establishment['phone']; ?></td>
			<td><?php echo $establishment['address']; ?></td>
			<td><?php echo $establishment['number']; ?></td>
			<td><?php echo $establishment['complement']; ?></td>
			<td><?php echo $establishment['neighborhood']; ?></td>
			<td><?php echo $establishment['city_id']; ?></td>
			<td><?php echo $establishment['order']; ?></td>
			<td><?php echo $establishment['disabled']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'establishments', 'action' => 'view', $establishment['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'establishments', 'action' => 'edit', $establishment['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'establishments', 'action' => 'delete', $establishment['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $establishment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Establishment'), array('controller' => 'establishments', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Patients'); ?></h3>
	<?php if (!empty($city['Patient'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Document'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Complement'); ?></th>
		<th><?php echo __('Neighborhood'); ?></th>
		<th><?php echo __('Phone Message'); ?></th>
		<th><?php echo __('Name Message'); ?></th>
		<th><?php echo __('Absence'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Disabled'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($city['Patient'] as $patient): ?>
		<tr>
			<td><?php echo $patient['id']; ?></td>
			<td><?php echo $patient['name']; ?></td>
			<td><?php echo $patient['document']; ?></td>
			<td><?php echo $patient['phone']; ?></td>
			<td><?php echo $patient['address']; ?></td>
			<td><?php echo $patient['number']; ?></td>
			<td><?php echo $patient['complement']; ?></td>
			<td><?php echo $patient['neighborhood']; ?></td>
			<td><?php echo $patient['phone_message']; ?></td>
			<td><?php echo $patient['name_message']; ?></td>
			<td><?php echo $patient['absence']; ?></td>
			<td><?php echo $patient['city_id']; ?></td>
			<td><?php echo $patient['disabled']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'patients', 'action' => 'view', $patient['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'patients', 'action' => 'edit', $patient['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $patient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Patient'), array('controller' => 'patients', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
