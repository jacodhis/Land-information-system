@extends('layouts.app')
@section('content')


<p>{{$purchasedland->land->name}} Land</p>

<p><img style="width: 50%" height="250" src="/storage/cover_images/{{$purchasedland->land->image}}"></p>

<p>Bought at price  :{{$purchasedland->amount}}</p>
<p>Usage :{{$purchasedland->usage}}</p>
<p>Aim  :{{$purchasedland->purpose}}</p>
<p>Buyer Name   :{{$purchasedland->buyer_name}}</p>
<p>phone : 0{{$purchasedland->phone_no}} </p>

<a class="btn btn-primary"> print document</a>



@endsection

