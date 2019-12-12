@extends('layouts.main')
@section('content')


    <h1>Home Page</h1>

    @if (session('successMsg'))
        <div class="conainer">
            <div class="alert alert-success" role="alert">
                {{session('successMsg')}}
            </div>
        </div>
    @endif



@endsection
