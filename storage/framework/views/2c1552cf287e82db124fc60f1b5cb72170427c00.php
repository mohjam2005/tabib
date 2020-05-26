<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <!--  -->
  <title>موقع طبيبي</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
 
      <img src="<?php echo e(asset('/images/logo.png')); ?>" class="navbar-brand">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" style="font-weight: bold; font-size: 1.2em " >
          <li class="nav-item active">
            <a class="nav-link" href="#">الرئيسية
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo e(asset('/we_us')); ?>">من نحن </a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="<?php echo e(asset('/addcat')); ?>">اضافة قسم </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(asset('/adddesease')); ?>">اضافة  مرض </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(asset('/desease')); ?>"> عرض الامراض  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(asset('/dropdownlist')); ?>"> فحص المريض </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(asset('/contact')); ?>">اتصل بنا</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo e(asset('/allpatient')); ?>"> عرض المرضى   </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <
  <div class="container" style="" >

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8" style="margin-top: 50px " style="margin-bottom: -50px"  >

       
        <?php echo $__env->yieldContent('content'); ?>

    

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">



      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="margin-top: 50px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>



  <!-- Bootstrap core JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>
         <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates1/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state1"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state1"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state1"]').empty();
               }
            });
    });
    </script>

</body>

</html>
