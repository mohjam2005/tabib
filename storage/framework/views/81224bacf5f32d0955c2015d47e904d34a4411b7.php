<?php $__env->startSection('content'); ?>


   <h1 class="my-4" style="text-align: right" style="margin-top: ">فحص الامراض
        
        </h1>
<form method="POST" action="store2" style="text-align: right;"  enctype="multipart/form-data">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
             
           <div class="form-group">
            <label for="name">اسم المريض</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
          </div>
          <div class="form-group">
            <label for="age">العمر</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="">
          </div>
          <div class="form-group">
            <label for="address">العنوان</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="">
          </div>
          <div class="form-group">
            <label for="mobile">الجوال</label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
          </div>

            <div class="form-group">
                <label for="country">اختار القسم</label>
                <select name="country" class="form-control" style="width:250px">
                    <option value="">--- Select category ---</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="state">الاعراض العامة</label>
                <select name="state" class="form-control"style="width:250px">
                <option>--State--</option>
                </select>
            </div>
              <div class="form-group">
                <label for="state1"> اعراض خاصة</label>
                <select name="state1" class="form-control"style="width:250px">
                <option>--State1--</option>
                </select>
            </div>


      <div class="form-group">

    <input type="hidden" class="form-control" name="disease_id" id="disease_id" value="" >
  </div>
  
  
  <button type="submit" class="btn btn-primary"> عرض المرض</button>
  

  
 
  
</form>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>