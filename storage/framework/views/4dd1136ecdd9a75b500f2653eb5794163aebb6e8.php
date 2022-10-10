<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 8 CRUD Tutorial From Scratch</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                 <a class="btn btn-success" href="<?php

use Illuminate\Contracts\Session\Session;

 echo e(route('companies.create')); ?>"> Create Company</a> 
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Company Name</th>
            <th>Company Email</th>
            
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($users->id); ?></td>
            <td><?php echo e($users->name); ?></td>
            <td><?php echo e($users->email); ?></td>
            <td>
                <form action="<?php echo e(route('companies.destroy',$users->id)); ?>" method="Post"> 
    
                     <a class="btn btn-primary" href="<?php echo e(route('companies.edit',$users->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $users->links(); ?>


</body>
</html><?php /**PATH C:\Users\ident\Desktop\hospital-reg\resources\views/admin.blade.php ENDPATH**/ ?>