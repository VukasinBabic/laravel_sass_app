@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit in saepe, officiis fugit nemo consectetur sequi, quasi dignissimos dolorem optio adipisci commodi voluptates animi minima quos, voluptatibus deleniti maiores temporibus?</p>
@endsection


@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection


