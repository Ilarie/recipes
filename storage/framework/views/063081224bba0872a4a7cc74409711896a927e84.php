<?php $__env->startSection('title', 'home'); ?>
							
<?php $__env->startSection('content'); ?>
    	
    	<?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class=" col-md-10 col-md-offset-1">
        	<table class="table">

        		<thead>
        			<th class="col-md-2">Titolo</th>
        			<th class="col-md-3">Ingredienti</th>
        			<th class="col-md-5">Descrizione</th>
                    <th class="col-md-1">Autore</th>
        			<th class="col-md-1"></th>
        		</thead>
        		
                <?php foreach($recipes as $recipe): ?>
    			<tbody>
    	
            		<td><?php echo e($recipe->title); ?></td>
            		<td><?php echo e($recipe->ingredients()->get()->implode('name',', ')); ?></td>
            		<td><?php echo e(substr($recipe->description,0,300)); ?>...</td>
                    <td><?php echo e($recipe->user->name); ?></td>     
                    <td><?php echo link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info']); ?></td>            
                
                </tbody>
                <?php endforeach; ?>	
            </table>
            <center><?php echo $recipes->render(); ?></center>		
	    </div>
<?php $__env->stopSection(); ?>	

	

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>