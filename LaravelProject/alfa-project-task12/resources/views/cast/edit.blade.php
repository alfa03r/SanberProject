@extends('layout.master')
@section('title')
    Edit Cast
@endsection

@section('content')
<div>
    <h2>Edit Cast {{$cast->id}}</h2>
    <form action="/cast/{{$cast->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Cast</label>
            <input type="text" class="form-control" name="name" value="{{$cast->name}}" id="name" placeholder="Masukkan name">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" name="umur"  value="{{$cast->umur}}"  id="umur" placeholder="Masukkan umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" class="form-control" name="bio"  value="{{$cast->bio}}"  id="bio" placeholder="Masukkan bio">
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/cast" class="btn btn-sm btn-secondary">Back</a>
    </form>
</div>
@endsection