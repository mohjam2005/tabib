@extends('master')



@section('content')

   <h1 class="my-4" style="text-align: right" style="margin-top: ">اضافة مرض
        
        </h1>
<form method="POST" action="store1" style="text-align: right;"  enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
     
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
                <label for="country">Select Country:</label>
                <select name="country" class="form-control" style="width:250px">
                    <option value="">--- Select Country ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="state">Select State:</label>
                <select name="state" class="form-control"style="width:250px">
                <option>--State--</option>
                </select>
            </div>

 <div class="form-group">
    <label for="category">القسم</label>
    <select name="category" id="category" class="form-control input-lg dynamic" data-dependent="state">
    @foreach($cat as $cats)
    <option value="{{$cats->id}}">
      {{$cats->name}}
    </option>  
    @endforeach
    </select>
  </div>
   <div class="form-group">
    <label for="category">الاعراض العامة</label>
     <div class="col-md-4">
  
    <select name="state" class="form-control input-lg dynamic">
          <option>--State--</option>
           </select>
    <input type="text" class="form-control" name="category" id="category" placeholder="">
  
  </div>
    </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
   <div class="form-group">
    <label for="category">الاعراض الخاصة</label>
    <input type="text" class="form-control" name="category" id="category" placeholder="">
  </div>


  <div class="form-group">

    <input type="hidden" class="form-control" name="disease_id" id="disease_id" value="" >
  </div>
  
  
  <button type="submit" class="btn btn-primary"> عرض المرض</button>
  

  
 
  
</form>

</div>
@stop
