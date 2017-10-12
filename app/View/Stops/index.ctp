<div class="stops index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Stops'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Stop'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Patients'), array('controller' => 'patients', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Patient'), array('controller' => 'patients', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Diaries'), array('controller' => 'diaries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Establishments'), array('controller' => 'establishments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Establishment'), array('controller' => 'establishments', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('patient_id'); ?></th>
						<th><?php echo $this->Paginator->sort('companion'); ?></th>
						<th><?php echo $this->Paginator->sort('diary_id'); ?></th>
						<th><?php echo $this->Paginator->sort('establishment_id'); ?></th>
						<th><?php echo $this->Paginator->sort('start_time'); ?></th>
						<th><?php echo $this->Paginator->sort('end_time'); ?></th>
						<th><?php echo $this->Paginator->sort('absence'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($stops as $stop): ?>
					<tr>
						<td><?php echo h($stop['Stop']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($stop['Patient']['name'], array('controller' => 'patients', 'action' => 'view', $stop['Patient']['id'])); ?>
		</td>
						<td><?php echo h($stop['Stop']['companion']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($stop['Diary']['id'], array('controller' => 'diaries', 'action' => 'view', $stop['Diary']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($stop['Establishment']['name'], array('controller' => 'establishments', 'action' => 'view', $stop['Establishment']['id'])); ?>
		</td>
						<td><?php echo h($stop['Stop']['start_time']); ?>&nbsp;</td>
						<td><?php echo h($stop['Stop']['end_time']); ?>&nbsp;</td>
						<td><?php echo h($stop['Stop']['absence']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $stop['Stop']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $stop['Stop']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $stop['Stop']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $stop['Stop']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->