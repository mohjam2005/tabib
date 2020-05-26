<?php $__env->startSection('content'); ?>


<!-- Blog Post -->

        <div class="card mb-4" >
        
        
          <div class="card-body" style="text-align: right;" >
            <div class="card text-white bg-primary mb-3" style="">
  <div class="card-header">معبومات عن المريض</div>
  <div class="card-body">
   

  
              <h1 class="card-title"> <h3><b>اسم المريض</b>  </h3><?php echo e($name); ?></h2>
                <hr>
            
            <h2 class="card-title"> <h3><b>عمر المريض</b>  </h3><?php echo e($age); ?></h2>
            <hr>
            
            <p class="card-text"><h3><b></b> عنوان المريض</h3><?php echo e($address); ?> </p>
            <hr>
            <p class="card-text"><h3><b></b>  جوال  : </h3><?php echo e($mobile); ?>  </p>
            
            </div>
              </div>

            <div class="alert alert-danger" role="alert">
            <p class="card-text"><h3> المريض يعاني من  : </h3><?php echo e($states2->title); ?> </p>
            </div>
            <div class="alert alert-warning" role="alert">
                        <p class="card-text"><h3> الوقاية  : </h3><?php echo e($states2->protection); ?> </p>
                       </div>
            <div class="alert alert-info" role="alert">

            <p class="card-text"><h3>العلاج : </h3><?php echo e($states2->treatment); ?> </p>
           </div>         
          </div>

<form method="POST" action="store3" style="text-align: right;"  enctype="multipart/form-data">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
             
           
        <input type="hidden" class="form-control" name="name" id="name" value="<?php echo e($name); ?>">
        <input type="hidden" class="form-control" name="age" id="age" value="<?php echo e($age); ?>">
        <input type="hidden" class="form-control" name="address" id="address" value="<?php echo e($address); ?>">
        <input type="hidden" class="form-control" name="mobile" id="mobile" value="<?php echo e($mobile); ?>">

    <input type="hidden" class="form-control" name="disease_id" id="disease_id" value="<?php echo e($states2->id); ?>" >
    <button type="submit" class="btn btn-danger"> تخزين المريض      </button>
  </form>

  
  </div>
  
        
         
         

     


     

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