<?php $__env->startSection('title', 'createUsers'); ?>
							
<?php $__env->startSection('content'); ?>
    	
<?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Crea un nuovo utente</div>
                <div class="panel-body col-md-10 col-md-offset-1">
                   
                <?php echo Form::open(['route'=>'admin.store', 'method'=>'POST']); ?>


                <div class ="form-group">
                    <label class="col-md-8 control-label">Nome</label>
                    <?php echo Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Insert name']); ?>

                </div>

                <div class ="form-group">
                    <label class="col-md-8 control-label">Email</label>
                    <?php echo Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Insert email']); ?>

                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-8 control-label">Password</label>

                            <div>
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-8 control-label">Confirm Password</label>

                            <div>
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                
                <div class ="form-group">
                    <label class="col-md-4 control-label">Admin</label>
                    <div class ="radio-inline">
                        <label><?php echo Form::radio('isAdmin','1'); ?>si</label>
                    </div>
                     <div class ="radio-inline">
                        <label><?php echo Form::radio('isAdmin','0', true); ?>no</label>
                    </div>
                </div>
                


                <?php echo Form::submit('save',['class'=>'btn btn-primary']); ?>    

                <?php echo Form::close(); ?>  
                
                </div>
            </div>
        </div>
    </div>
</div>   
		  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>