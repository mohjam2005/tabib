@extends('master')



@section('content')

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
    @foreach($states1 as $stat)

    <tr>
      <th scope="row">{{$stat->id}}</th>
      <td>{{$stat->name}}</td>
      <td>{{$stat->age}}</td>
      <td>{{$stat->address}}</td>
      <td>{{$stat->mobile}}</td>
     @foreach($states as $stat0)

      @if($stat->disease_id == $stat0->id)
      <td>{{$stat0->title}}</td>
    </tr>
    @endif
           @endforeach
   @endforeach
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



@stop
