<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> </head>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">city</th>
      <th scope="col">stage</th>
      <th scope="col">Hospital_id</th>
      <th scope="col">Zipcode</th>
      <th scope="col">Speciality</th>
      <th scope="col">Address</th>



      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user->email); ?></th>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->city); ?></td>
      <td><?php echo e($user->stage); ?></td>
      <td><?php echo e($user->hospital_id); ?></td>
      <td><?php echo e($user->zipcode); ?></td>
      <td><?php echo e($user->speciality); ?></td>
      <td><?php echo e($user->address); ?></td>



      
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
</html><?php /**PATH C:\Users\ident\Desktop\hospital-reg\resources\views/admin/index.blade.php ENDPATH**/ ?>