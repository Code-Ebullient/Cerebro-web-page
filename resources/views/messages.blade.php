@extends('layouts.land')

@section('messgTitl')
  Messages
@endsection

@section('content')

@if(count($messages) > o)

    @foreach($messages as $message)

    @endforeach
@endif

@endsection