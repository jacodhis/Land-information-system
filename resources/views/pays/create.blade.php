@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Payments 
                <div class="card-body">
    <form method="post" action="{{url('/Payments')}}" >
    {{ csrf_field() }}

            <div class="form-group">
         <label for="name">account_number:</label>
        <input type="text" class="form-control" name="account_number"  required="">
            </div>

            <div class="form-group">
         <label for="amount ">amount :</label>
        <input type="text" class="form-control" name="amount" required="">
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