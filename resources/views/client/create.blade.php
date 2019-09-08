@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{route('clients.store')}}">
        {{ csrf_field() }}
        <div class="form-group">

            <input type="hidden" class="form-control" name="key">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
  @endsection




  