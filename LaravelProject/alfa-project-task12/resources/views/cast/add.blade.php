@extends('layout.master');

@section('title')
    Add Cast
@endsection

@section('content')
<h2>Tambah Data</h2>
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama Cast</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Cast">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan bio">
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/cast" class="btn btn-sm btn-secondary">Back</a>
</form>
@endsection