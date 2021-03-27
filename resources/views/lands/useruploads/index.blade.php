 
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">

    @foreach($uploadesigns as $userupload)
       <div class="col-md-3 py-4">
          <p>  <img style="width:80%" height="80" src="/storage/cover_images/{{$userupload->image}}"><br></p>
          <p>Description : {{$userupload->description}}</p>
          <p>{{$userupload->created_at}}</p>
        </div>
       @endforeach

   </div>
     
       
</div>




@endsection