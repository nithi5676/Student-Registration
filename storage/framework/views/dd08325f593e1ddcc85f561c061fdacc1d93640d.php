<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> </head>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Reg No</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">StudentId</th>
      <th scope="col">Zipcode</th>
      <th scope="col">Specialization</th>
      <th scope="col">College Name</th>
      <th scope="col">Degree</th>



      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user->email); ?></th>
      <td><?php echo e($user->reg_no); ?></td>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->dob); ?></td>
      <td><?php echo e($user->city); ?></td>
      <td><?php echo e($user->state); ?></td>
      <td><?php echo e($user->student_id); ?></td>
      <td><?php echo e($user->zipcode); ?></td>
      <td><?php echo e($user->speciality); ?></td>
      <td><?php echo e($user->college_name); ?></td>
      <td><?php echo e($user->degree); ?></td>



      
      <td><a href="<?php echo e(url('/edit-records/'.$user->id)); ?>" class="btn btn-primary  active" role="button" aria-pressed="true">edit</a>
</td>
<td><form action="<?php echo e(url('/delete-records/'.$user->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('DELETE'); ?>
  <button class="btn btn-danger">Delete</button>
</form>
</td>





    </tr>
   
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>
</html><?php /**PATH C:\xampp\htdocs\hospital-reg\resources\views/admin/index.blade.php ENDPATH**/ ?>