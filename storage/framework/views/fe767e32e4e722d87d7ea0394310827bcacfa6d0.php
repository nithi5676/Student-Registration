

<?php

use Illuminate\Contracts\Session\Session;
//use Illuminate\Support\Facades\Session as FacadesSession;

 $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Information </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Reg No</th>
            <th>Name</th>
            <th>email</th>
            <th>Student ID</th>
            <th>College Name</th>
            <th>Degree</th>
            <th>City</th>
            <th>State</th>
            <th>Zipcode</th>
              
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->reg_no);?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->student_id); ?></td>
                <td><?php echo e($user->college_name); ?></td>
                <td><?php echo e($user->degree); ?></td>
                <td><?php echo e($user->city); ?></td>
                <td><?php echo e($user->state); ?></td>
                <td><?php echo e($user->zipcode); ?></td>
                
                    <form action="" method="POST">

                       

                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ident\Desktop\hospital-reg\resources\views/products/index.blade.php ENDPATH**/ ?>