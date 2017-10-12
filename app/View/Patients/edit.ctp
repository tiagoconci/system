<div class="patients form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Patient'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Patient.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Patient.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Patients'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cities'), array('controller' => 'cities', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New City'), array('controller' => 'cities', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stops'), array('controller' => 'stops', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Stop'), array('controller' => 'stops', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Patient', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('document', array('class' => 'form-control', 'placeholder' => 'Document'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('number', array('class' => 'form-control', 'placeholder' => 'Number'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('complement', array('class' => 'form-control', 'placeholder' => 'Complement'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('neighborhood', array('class' => 'form-control', 'placeholder' => 'Neighborhood'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone_message', array('class' => 'form-control', 'placeholder' => 'Phone Message'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name_message', array('class' => 'form-control', 'placeholder' => 'Name Message'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('absence', array('class' => 'form-control', 'placeholder' => 'Absence'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city_id', array('class' => 'form-control', 'placeholder' => 'City Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('disabled', array('class' => 'form-control', 'placeholder' => 'Disabled'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
