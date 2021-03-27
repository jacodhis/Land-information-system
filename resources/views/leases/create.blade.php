@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: blue">Lease Land
                <div class="card-body" style="background-color: yellow">
    <form method="post" action="{{url('/store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

            <div class="form-group">
         <label for="usage">usage:</label>
        <input type="text" class="form-control" name="usage"  required="" placeholder="purpose of land">
            </div>

            <div class="form-group">
         <label for="payment">payment:</label>
        <input type="text" class="form-control" name="payment" required="">
            </div>


<div class="form-group">
         <label for="period">period:</label>
        <input type="text" class="form-control" name="period" required="">
            </div>

            <div class="form-group">
               
         <label for="land">select land:</label>
         
           <select id="land" name="land" class="form-control">
             @foreach($lands as $land)
            <option value="{{$land->id}}">{{$land->name}}</option>
            @endforeach
          </select>
         
            </div>




           
    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form>
    
</div>
</div>
</div>
</div>
</div>





@endsection