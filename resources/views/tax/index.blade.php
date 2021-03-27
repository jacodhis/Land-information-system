@extends('layouts.app')
@section('content')


<h3>LAND  RATES</h3>
<table class="table table-hover">
  	<tr>
  		<th>Land Name</th>
  		<th>Tax</th>
  		<!-- <th>Title Deed</th> -->
  		<th>Year</th>

  	</tr>
  	<tr>
  	@foreach($lands as $land)
  	
  		<td>
  			 <label for="land"> {{$land->name}}</label>
  		</td>

       @foreach($land->taxes as $tax)
  		<td>
        <label for="tax"> {{$tax->tax}}</label>
  		</td>

  		<td>
          <label for="year"> {{$tax->year}}</label>
  		</td>
  		
  		@endforeach

  	   	@endforeach
     <tr>
  </table>



@endsection


