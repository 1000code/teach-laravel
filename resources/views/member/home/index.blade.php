@extends('layouts.app')
@section('contents')
    <div class="container">
        {{ Auth()->user()->role }}
    </div>
@endsection
