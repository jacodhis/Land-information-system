@extends('layouts.app')
@section('content')



<p></p>
<table class="table">
	<tr>
		<th>Id</th>
		 
		<th>Land Amount</th>
		<th>Purpose</th>
		<th>Buyer</th>
		<th>Time </th>
	</tr>
	@foreach($paidlands as $paidland)
       <tr>
       	<td><a href="/payment/{{$paidland->id}}">{{$paidland->id}}</a></td>
       	<td>{{$paidland->amount}}</td>
       	<td>{{$paidland->purpose}}</td>
       	<td>{{$paidland->buyer_name}}</td>
       	   	<td>{{$paidland->created_at}}</td>
       </tr>

	@endforeach
</table>


@endsection

