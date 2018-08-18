@extends('layouts.app')

@section('title', "Error page")

@section('content')
    <h2>{{ $exception->getMessage() }}</h2>
@endsection
