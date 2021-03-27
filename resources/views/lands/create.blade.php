@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adding Land
                <div class="card-body">
    <form method="post" action="{{url('/lands')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

            <div class="form-group">
         <label for="name">name:</label>
        <input type="text" class="form-control" name="name" required="" placeholder="enter your name">
            </div>

            <div class="form-group">
        <label for="location">location:</label>
        <input type="text" class="form-control" name="location" required=""/>
            </div>

            <div class="form-group">
        <label for="price">price:</label>
        <input type="text" class="form-control" name="price" required=""/>
            </div>

            <div class="form-group">
        <label for="acre">acre:</label>
        <input type="text" class="form-control" name="acre" required=""/>
            </div>

            <div class="form-group">
        <label for="image">image:</label>
        <input type="file" class="form-control" name="cover_image" required=""/>
            </div>

              <div class="form-group">
               
         <label for="land"> land owner:</label>
         
           <select id="owner" name="owner" class="form-control">
             @foreach($owners as $owner)
            <option value="{{$owner->id}}">{{$owner->name}}</option>
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