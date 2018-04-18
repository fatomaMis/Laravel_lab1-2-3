<!-- <h1>Edit Page<h1> -->




<?php $__env->startSection('content'); ?>

<form method="post" action="/update/<?php echo e($post->id); ?>">
<?php echo e(csrf_field()); ?>

Title :- <input type="text" name="title" value="<?php echo e($post->title); ?>"/>
<br><br>
Description :- 
<textarea name="description"><?php echo e($post->description); ?></textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>
<br>
<input type="submit" value="Update" class="btn btn-primary">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>