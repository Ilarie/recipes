<?php $__env->startSection('title', 'Edit Recipe'); ?>
<?php $__env->startSection('content'); ?>
                 
                <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::model($recipe, ['route'=>['recipes.update', $recipe->id], 'method'=>'PUT']); ?>

                 
             
                <div class ="form-group">
                    <?php echo Form::label('Titolo: '); ?>

                    <?php echo Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Insert title']); ?>

                </div>

                <div class ="form-group">
                    <?php echo Form::label('ingredient_list', 'Ingredienti: '); ?>

                    <?php echo Form::select('ingredient_list[]',$ingredients, null,['class'=>'form-control', 'id' => 'ingredient_list','multiple']); ?>

                </div>

                <div class ="form-group">
                    <?php echo Form::label('Descrizione: '); ?>

                    <?php echo Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Insert description']); ?>

                </div>
                <div class ="form-group">
                    <?php echo Form::submit('Edit',['class'=>'btn btn-warning']); ?>    
                    <?php echo Form::close(); ?>                
                </div>
                <div class ="form-group">
                    <?php echo Form::open(['route'=>['recipes.destroy', $recipe->id], 'method'=>'DELETE']); ?>    
                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>    
                    <?php echo Form::close(); ?>                
                </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
      
            <script type="text/javascript">
                 $('#ingredient_list').select2({
                    placeholder: 'Scegliere o aggiungere gli ingredienti' ,
                    tags: true,
                    tokenSeparators: [",", " "],
                    createTag: function(newIngredient) {
            return {
                id: 'new:' + newIngredient.term,
                text: newIngredient.term + ' (+)'
            };
                   }
                });
            </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>