<?php $__env->startSection('content'); ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Post</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="/home">Home</a></li>
        <li><a href="#">Posts</a></li>
    </div>
  </div>
</nav>


<div class="container">
        <div class="table-wrapper">         
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                                            
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success" data-toggle="modal"> <span>Add New Post</span></a>
                    </div>
                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Posted By</th>
                        <th>Created at</th>
                        <th>Actions</th>
                        <th>Slug</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $count=0
                ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>

                        <?php $count++ ?>
                        <td><?php echo e($count); ?></td>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->user->name); ?></td>
                        <td><?php echo e($post->created_at->toDateString()); ?></td>
                        
                        <td>
                        <a href="<?php echo e(route('posts.show',$post->id)); ?>"  class="btn btn-info" role="button">View</a>
                        <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary" role="button">Edit</a>
                        <!-- <a href="#" class="btn btn-danger" role="button">Delete</a> -->
                        <form method="post" action="/posts/<?php echo e($post->id); ?>" >
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
                        </form>
                        </td>

                        <td><?php echo e($post->slug); ?></td>
                    </tr>
                    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                </tbody>
            </table>
            <?php echo e($posts->links()); ?>

        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>