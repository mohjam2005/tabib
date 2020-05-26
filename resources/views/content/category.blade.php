@extends('master')



@section('content')


<!-- Blog Post -->
@foreach($deseases as $desease)
        <div class="card mb-4" >
        	@if(!$desease->url)

          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          
            @else
           <img class="card-img-top" src="uplaod/{{$desease->url}}" alt="Card image cap" width="500px" height="300px">	
            @endif
          <div class="card-body" style="text-align: right;" >
                     

            <h2 class="card-title"> <h3><b>اسم المرض:</b>  </h3>{{ $desease->title }}</h2>
            <p class="card-text"><h3><b></b> تفاصيل المرض: </h3>{{ $desease->detaill }} </p>
            <p class="card-text"><h3><b></b> الأعراض العامة : </h3>{{ $desease->Pub_Symptoms }} </p>
            <p class="card-text"><h3><b></b> الأعراض الخاصة : </h3>{{ $desease->Private_Symptoms }} </p>
            <p class="card-text"><h3><b></b> الوقاية : </h3>{{ $desease->protection }} </p>
            <p class="card-text"><h3><b></b> العلاج : </h3>{{ $desease->treatment }} </p>
           
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $desease->created_at }} 
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
@endforeach
     

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

@stop
