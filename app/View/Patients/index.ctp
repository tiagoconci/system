<div class="patients index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Patients'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Patient'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cities'), array('controller' => 'cities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New City'), array('controller' => 'cities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stops'), array('controller' => 'stops', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Stop'), array('controller' => 'stops', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('document'); ?></th>
						<th><?php echo $this->Paginator->sort('phone'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<th><?php echo $this->Paginator->sort('number'); ?></th>
						<th><?php echo $this->Paginator->sort('complement'); ?></th>
						<th><?php echo $this->Paginator->sort('neighborhood'); ?></th>
						<th><?php echo $this->Paginator->sort('phone_message'); ?></th>
						<th><?php echo $this->Paginator->sort('name_message'); ?></th>
						<th><?php echo $this->Paginator->sort('absence'); ?></th>
						<th><?php echo $this->Paginator->sort('city_id'); ?></th>
						<th><?php echo $this->Paginator->sort('disabled'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($patients as $patient): ?>
					<tr>
						<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['name']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['document']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['phone']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['number']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['complement']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['neighborhood']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['phone_message']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['name_message']); ?>&nbsp;</td>
						<td><?php echo h($patient['Patient']['absence']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($patient['City']['name'], array('controller' => 'cities', 'action' => 'view', $patient['City']['id'])); ?>
		</td>
						<td><?php echo h($patient['Patient']['disabled']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $patient['Patient']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $patient['Patient']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $patient['Patient']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $patient['Patient']['id'])); ?>
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