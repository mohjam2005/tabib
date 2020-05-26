<?php $__env->startSection('content'); ?>


<!-- Blog Post -->
<?php $__currentLoopData = $deseases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4" >
        	<?php if(!$desease->url): ?>

          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          
            <?php else: ?>
           <img class="card-img-top" src="uplaod/<?php echo e($desease->url); ?>" alt="Card image cap" width="500px" height="300px">	
            <?php endif; ?>
          <div class="card-body" style="text-align: right;" >
              <h1 class="card-title"> <h3><b> القسم</b>  </h3><?php echo e($desease->category['name']); ?></h2>
            <h2 class="card-title"> <h3><b>اسم المرض:</b>  </h3><?php echo e($desease->title); ?></h2>
            <p class="card-text"><h3><b></b> تفاصيل المرض: </h3><?php echo e($desease->detaill); ?> </p>
            <p class="card-text"><h3><b></b> الأعراض العامة : </h3><?php echo e($desease->Pub_Symptoms); ?> </p>
            <p class="card-text"><h3><b></b> الأعراض الخاصة : </h3><?php echo e($desease->Private_Symptoms); ?> </p>
            <p class="card-text"><h3><b></b> الوقاية : </h3><?php echo e($desease->protection); ?> </p>
            <p class="card-text"><h3><b></b> العلاج : </h3><?php echo e($desease->treatment); ?> </p>
           
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo e($desease->created_at); ?> 
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>