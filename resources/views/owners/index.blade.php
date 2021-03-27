@extends('layouts.app')
@section('content')


<h3>LAND OWNERS</h3>
<table class="table table-hover">
  	<tr>
  		<th>Name</th>
  		<th>Phone Number</th>
  		<th>National Id</th>
  	</tr>
  	@foreach($owners as $owner)
  	<tr>
  		<td>
  			  <label for="purpose"> {{$owner->name}}</label>
  		</td>

  		<td>
 
  <label for="purpose"> {{$owner->phone_number}}</label>
  		</td>

  		<td>
  			
  <label for="purpose"> {{$owner->national_id}}</label>
  		</td>
  	</tr>
  	@endforeach
  </table>


  <input type="submit" value="Submit" class="btn btn-primary">
</form>


@endsection

