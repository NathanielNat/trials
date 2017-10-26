@extends('views.app')

@section('content')

    <div class = "panel-body">
        {{--  @include ('common.errors')
      --}}
        <form action = "/about" method  = "POST" class = "form-horizontal">
            <div class = "col-sm-6"> 
            <input type = "text" name = "name" id = "task-name" class = "form-control">
            </div>
        </form>
    </div>
@endsection