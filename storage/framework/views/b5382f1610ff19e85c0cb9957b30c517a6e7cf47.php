<?php $__env->startSection('content'); ?>

   <h1 class="my-4" style="text-align: right" style="margin-top: ">اضافة مرض
        
        </h1>

<form method="POST" action="store" style="text-align: right;"  enctype="multipart/form-data">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
   <div class="form-group">
            

                <label for="Category_id">اختار القسم</label>
                <select name="Category_id" class="form-control" style="width:250px">
                    <option value="">--- Select category ---</option>
                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            

  </div>
   <div class="form-group">
    <label for="title">اسم المرض</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="">
  </div>

  <div class="form-group">
    <label for="detaill">التفاصيل</label>
    <input type="" class="form-control" name="detaill" id="detaill" placeholder="" >
  </div>
  <div class="form-group">
    <label for="Pub_Symptoms">الاعراض العامة </label>
    <input type="text" class="form-control" name="Pub_Symptoms" id="Pub_Symptoms" placeholder="">
  </div>
    <div class="form-group">
    <label for="Pub_Symptoms">الاعراض الخاصة   </label>
    <input type="text" class="form-control" name="Private_Symptoms" id="Private_Symptoms" placeholder="">
  </div>
    <div class="form-group">
    <label for="Pub_Symptoms">الوقاية  </label>
    <input type="text" class="form-control" name="protection" id="protection" placeholder="">
  </div>
   
    <div class="form-group">
    <label for="Pub_Symptoms"> العلاج </label>
    <input type="text" class="form-control" name="treatment" id="treatment" placeholder="">
  </div>
   
    <div class="form-group">
    <label for="url"> الصورة </label>
    <input type="file" class="form-control" name="url" id="url" placeholder="">
  </div>
  
  <button type="submit" class="btn btn-primary">اضافة مرض</button>
  

  
 
  
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>