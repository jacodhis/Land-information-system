@extends('layouts.app')
@section('content')


<p>{{$land->name}}</p>
<p>{{$land->location}}</p>
<p><a href="/lands/{{$land->id}}">   <img style="width: 80%" height="250" src="/storage/cover_images/{{$land->image}}"></a></p>
<p>ACRE : {{$land->acre}}</p>
<p>PRICE : {{$land->price}} MILLION</p>
<p>OWNER : {{$land->owner->name}} </p>





<a href="/purchasepayments/{{$land->id}}" class="btn btn-primary">purchase</a>




<a href="/lease/{{$land->id}}" class="btn btn-primary">Lease</a>





@endsection

