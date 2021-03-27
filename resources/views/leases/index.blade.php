@extends('layouts.app')
@section('content')

<h3>{{$land->name}}</h3>
 <form method="post" action="/payments/{{$land->id}}" > 
<!-- <form method="POST" action="/pay-with-paypal"> -->
    
{{ csrf_field() }}
<table class="table table-hover">
  	<tr>
  		<th>purpose</th>
  		<th>Payment</th>
  		<th>Period</th>
  	</tr>
  	@foreach($land->leases as $lease)

  	<tr>
  		<td>
  			<input type="checkbox" id="#" name="purpose" value="{{$lease->id}}">
  <label for="purpose"> {{$lease->usage}}</label>
  		</td>

  		<td>
  			 <input type="hidden" name="payment" value="{{$lease->payment}}">
  <label for="purpose"> {{$lease->payment}}</label>
  		</td>

  		<td>
  			
  <label for="purpose"> {{$lease->period}}</label>
  		</td>

      <input type="hidden" name="landname" value="{{$land->id}}">
  	</tr>

  	@endforeach
  </table>


  <input type="submit" value="pay : " class="btn btn-primary" name="submit">
</form>


@endsection

