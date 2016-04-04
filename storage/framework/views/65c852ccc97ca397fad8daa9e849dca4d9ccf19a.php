<?php $__env->startSection('title', 'Show'); ?>
<?php $__env->startSection('content'); ?>
    	       
            <h1><?php echo e($recipe->title); ?></h1>
    	    	
                <table class="table">

    	    		<thead>
    	    			
    	    			<th>Ingredienti</th>
    	    			<th>Descrizione</th>
                        <th>Autore</th>
                        <th></th>

    	    		</thead>
    	    		
					<tbody>

                		<td><?php echo e($recipe->ingredients()->get()->implode('name',', ')); ?></td>
                		<td><?php echo e($recipe->description); ?></td>
                        <td><?php echo e($recipe->user->name); ?></td>
                        <td><?php echo link_to_route('admin.edit', $title = 'Edit', $parameters = $recipe->id, $attributes = ['class'=>'btn btn-warning']); ?></td>                           
                        <td><?php echo Form::open(['route'=>['admin.destroyRecipes', $recipe->id], 'method'=>'DELETE']); ?>    
                                <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>    
                            <?php echo Form::close(); ?></td>
					
                    </tbody>
                
                </table>
	
<?php $__env->stopSection(); ?>				
	    
<?php $__env->startSection('script'); ?>	
        <script type = "text/javascript">
 		  $(function(){
    	  $(".close").click(function(){
         $("#myAlert").alert('close');
      				});
 					  });  
		</script>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>