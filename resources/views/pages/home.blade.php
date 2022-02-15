@extends('layouts.main-layout')
@section('content')
    <a class="btn btn-danger" href="{{route('postcards.create')}}">Create</a>
    <Postcard-Component></Postcard-Component>
@endsection