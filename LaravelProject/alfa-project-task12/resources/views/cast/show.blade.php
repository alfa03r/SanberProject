@extends('layout.master')

@section('title')
    Detail cast
@endsection

@section('content')
<h4>{{$cast->name}}</h4>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-sm btn-secondary">Back</a>
@endsection