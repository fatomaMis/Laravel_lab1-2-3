<?php $__env->startSection('content'); ?>

<!-- <h1>Posts Index</h1> -->

<div class="container">
        <div class="table-wrapper">         

            <table class="table table-bordered">
            <th style="background-color:#D3D3D3">Post Info</th>        
                <tr><td><b>Title </b>:-<?php echo e($post->title); ?>

                <br><b>Description </b>:-<?php echo e($post->description); ?></td></tr>
            </table>
            <table class="table table-bordered">
            <th style="background-color:#D3D3D3">Post Creator Info</th>   
                <tr><td><b>Name </b>:- <?php echo e($post->user->name); ?>

                <br><b>Email </b>:- <?php echo e($post->user->email); ?>

                <br><b>Created At </b>:- <?php echo e($post->user->created_at); ?>

   
                </td></tr>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>