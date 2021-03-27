@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Owner
                <div class="card-body">
    <form method="post" action="{{url('/owners')}}" >
    {{ csrf_field() }}

            <div class="form-group">
         <label for="name">name:</label>
        <input type="text" class="form-control" name="name"  required="">
            </div>

            <div class="form-group">
         <label for="phone number">phone number:</label>
        <input type="text" class="form-control" name="phone_number" required="">
            </div>


<div class="form-group">
         <label for="national id">national id:</label>
        <input type="text" class="form-control" name="national_id" required="">
            </div>

        
    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form>
    
</div>
</div>
</div>
</div>
</div>





@endsection