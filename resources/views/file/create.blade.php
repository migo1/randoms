@extends('layouts.app')


@section('content')

<div class="container">
<form method="POST" action="{{ route('files.store')}}">
    {{ csrf_field() }}

    <input type="hidden" name="file_code" id="">
    <div class="form-group mx-sm-3 mb-2">
      <input type="text" class="form-control" name="name" placeholder="name">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add</button>
  </form>
</div>
@endsection