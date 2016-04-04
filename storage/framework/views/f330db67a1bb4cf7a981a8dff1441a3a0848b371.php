<?php $__env->startSection('title', 'UserRecipes'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               <h1>Le ricette di <?php echo e(Auth::user()->name); ?> </h1>

    	    	<table class="table">

    	    		<thead>
    	    			<th>Titolo</th>
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
                        <th></th>
    	    		</thead>
    	    		
<?php foreach($recipes as $recipe): ?>
					<tbody>
	

		<td><?php echo e($recipe->title); ?></td>
		<td><?php echo e($recipe->ingredients()->get()->implode('name',', ')); ?></td>
		<td><?php echo e($recipe->description); ?><td>
        <td><?php echo link_to_route('recipes.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning']); ?></td>            
        <td><?php echo link_to_route('recipes.show', $title = 'Show', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-info']); ?></td>            
       
		  
	
					</tbody>
<?php endforeach; ?>	
				
<?php $__env->stopSection(); ?>	    

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>