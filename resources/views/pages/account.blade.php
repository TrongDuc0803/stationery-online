@extends('layouts.master')
@section('title', 'Cart')
@section('content')
    User account

    @auth
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
    @endauth
@endsection
