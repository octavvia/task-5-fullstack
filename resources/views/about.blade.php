@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <img src="{{ $image }}" alt="{{ $name }}" width="150" class="img-thumbnail">
  <p>Halo nama saya {{ $name }}, email saya {{ $email }}</p>
@endsection
  