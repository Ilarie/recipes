<?php $__env->startSection('title', 'showUsers'); ?>
							
<?php $__env->startSection('content'); ?>
    	
    	<?php if(session('success')): ?>
    		<div class="alert alert-success">
    		    <?php echo e(session('success')); ?>

  			</div>
		<?php endif; ?>
            <div class=" col-md-8 col-md-offset-2">
    	    	<table class="table">

    	    		<thead>
    	    			<th class="col-md-3">Nome</th>
    	    			<th class="col-md-6">Email</th>
                        <th class="col-md-3"></th>
    	    		</thead>
    	    		
                    <?php foreach($users as $user): ?>
					<tbody>
	
                		<td><?php echo e($user->name); ?></td>
                		<td><?php echo e($user->email); ?></td>
                        <td><?php echo Form::open(['route'=>['admin.destroy', $user->id], 'method'=>'DELETE']); ?>    
                            <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>    
                            <?php echo Form::close(); ?></td>     
                        
                    </tbody>
                    <?php endforeach; ?>
                </table>
           </div>     
		
<?php $__env->stopSection(); ?>	

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>