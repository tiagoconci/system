<div class="stops view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Stop'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Stop'), array('action' => 'edit', $stop['Stop']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Stop'), array('action' => 'delete', $stop['Stop']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $stop['Stop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Stops'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Stop'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Patients'), array('controller' => 'patients', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Patient'), array('controller' => 'patients', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Diaries'), array('controller' => 'diaries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Establishments'), array('controller' => 'establishments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Establishment'), array('controller' => 'establishments', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($stop['Stop']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Patient'); ?></th>
		<td>
			<?php echo $this->Html->link($stop['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $stop['Patient']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Companion'); ?></th>
		<td>
			<?php echo h($stop['Stop']['companion']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Diary'); ?></th>
		<td>
			<?php echo $this->Html->link($stop['Diary']['id'], array('controller' => 'diaries', 'action' => 'view', $stop['Diary']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Establishment'); ?></th>
		<td>
			<?php echo $this->Html->link($stop['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $stop['Establishment']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Start Time'); ?></th>
		<td>
			<?php echo h($stop['Stop']['start_time']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('End Time'); ?></th>
		<td>
			<?php echo h($stop['Stop']['end_time']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Absence'); ?></th>
		<td>
			<?php echo h($stop['Stop']['absence']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

