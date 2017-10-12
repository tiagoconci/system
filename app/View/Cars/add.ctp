<div class="cars form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Car'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cars'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Diaries'), array('controller' => 'diaries', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Diary'), array('controller' => 'diaries', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Car', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('model', array('class' => 'form-control', 'placeholder' => 'Model'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('brand', array('class' => 'form-control', 'placeholder' => 'Brand'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('year', array('class' => 'form-control', 'placeholder' => 'Year'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('type', array('class' => 'form-control', 'placeholder' => 'Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('car_plate', array('class' => 'form-control', 'placeholder' => 'Car Plate'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('capacity', array('class' => 'form-control', 'placeholder' => 'Capacity'));?>
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
