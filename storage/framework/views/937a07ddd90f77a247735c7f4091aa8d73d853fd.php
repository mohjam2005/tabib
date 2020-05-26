<?php $__env->startSection('content'); ?>

<center>
<table class="table" style="font-size: 20px; ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
      <th scope="col">العمر </th>
      <th scope="col">العنوان</th>
      <th scope="col">الجوال</th>
      <th scope="col">المرض</th>

    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $states1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <th scope="row"><?php echo e($stat->id); ?></th>
      <td><?php echo e($stat->name); ?></td>
      <td><?php echo e($stat->age); ?></td>
      <td><?php echo e($stat->address); ?></td>
      <td><?php echo e($stat->mobile); ?></td>
     <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php if($stat->disease_id == $stat0->id): ?>
      <td><?php echo e($stat0->title); ?></td>
    </tr>
    <?php endif; ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

</center>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>