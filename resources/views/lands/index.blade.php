@extends('layouts.app')
@section('content')
<p>click the image to view more</p>

@foreach($lands as $land)

<p>{{$land->name}}</p>
<p>{{$land->location}}</p>
<p><a href="/lands/{{$land->id}}">   <img style="width: 80%" height="250" src="/storage/cover_images/{{$land->image}}"></a></p>
@endforeach

@endsection

