<?php $__env->startSection('title', 'Show'); ?>
<?php $__env->startSection('content'); ?>
    	   
           <div class=" col-md-8 col-md-offset-2">  
            
                <h1><?php echo e($recipe->title); ?></h1>
                <h3> Autore </h3>
                <p> <?php echo e($recipe->user->name); ?> </p>
                <h3> Ingredienti </h3>
                <p> <?php echo e($recipe->ingredients()->get()->implode('name',', ')); ?> </p>
                <h3> Descrizione </h3>
                <p> <?php echo e($recipe->description); ?> </p>
            
            </div>
	
<?php $__env->stopSection(); ?>				
	    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>