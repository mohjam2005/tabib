@extends('master')



@section('content')

   <h1 class="my-4" style="text-align: right" style="margin-top: ">اضافة قسم
        
        </h1>
<form method="POST" action="store1" style="text-align: right;"  enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
    <label for="name">اسم القسم</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="">
  </div>

  <div class="form-group">
    <label for="des">التفاصيل</label>
    <input type="" class="form-control" name="des" id="des" placeholder="" >
  </div>
  
  
  <button type="submit" class="btn btn-primary"> اضافة</button>
  

  
 
  
</form>
</div>
@stop
