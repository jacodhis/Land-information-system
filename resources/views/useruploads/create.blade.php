 
@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload T-shirt Image</div>

                <div class="card-body">
    <form method="post" action="{{url('/store-tshirt')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
        <label for="author">Cover:</label>
        <input type="file" class="form-control" name="cover_image" >
    </div>

            <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" name="description"/>
    </div>

    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form>
    
</div>
</div>
</div>
</div>
</div>





@endsection