<?php $__env->startSection('title', 'showIngredients'); ?>
							
<?php $__env->startSection('content'); ?>
    	
    	<?php if(session('success')): ?>
    		<div class="alert alert-success">
    		    <?php echo e(session('success')); ?>

  			</div>
		<?php endif; ?>
		<div class="col-md-4 col-md-offset-4">
			<table class="table">
				<thead>
				    	<th>Ingredienti</th>
				    	<th></th>
				</thead>
				    	    		
				<?php foreach($ingredients as $ingredient): ?>
				<tbody>
				    <td><?php echo e($ingredient->name); ?></td>
				    <td><?php echo Form::open(['route'=>['admin.destroyIngredient', $ingredient->id], 'method'=>'DELETE']); ?>    
		                <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>    
		                <?php echo Form::close(); ?></td>
				</tbody>
				<?php endforeach; ?>	
			</table>
			
		</div>
		
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>