@extends('layouts.app')


@section('content')

    <div class="container">
        <form action="/userv" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="input-lg form-control" name="text">
            <button class="btn-info btn">
                submit
            </button>
        </form>
    </div>



@endsection