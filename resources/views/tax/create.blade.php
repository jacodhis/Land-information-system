@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tax Form
                <div class="card-body">
    <form method="post" action="{{url('/taxes')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

            <div class="form-group">
         <label for="Tax">Tax:</label>
        <input type="text" class="form-control" name="tax" required="">
            </div>

            <div class="form-group">
        <label for="year">year:</label>
        <input type="date" class="form-control" name="year" required=""/>
            </div>


            <div class="form-group">
        <label for="image">image:</label>
        <input type="file" class="form-control" name="cover_image" required=""/>
            </div>


            <div class="form-group">
               
         <label for="land">Land to Tax </label>
         
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