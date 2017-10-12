<div class="stops form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Stop'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stops'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Patients'), array('controller' => 'patients', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Patient'), array('controller' => 'patients', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Diaries'), array('controller' => 'diaries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Establishments'), array('controller' => 'establishments', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Establishment'), array('controller' => 'establishments', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Stop', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('patient_id', array('class' => 'form-control', 'placeholder' => 'Patient Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('companion', array('class' => 'form-control', 'placeholder' => 'Companion'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('diary_id', array('class' => 'form-control', 'placeholder' => 'Diary Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('establishment_id', array('class' => 'form-control', 'placeholder' => 'Establishment Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('start_time', array('class' => 'form-control', 'placeholder' => 'Start Time'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('end_time', array('class' => 'form-control', 'placeholder' => 'End Time'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('absence', array('class' => 'form-control', 'placeholder' => 'Absence'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
