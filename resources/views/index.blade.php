@extends('layout')

@section('content')
<h1>{{ str_replace('_', ' ', $id) }}</h1>
<a href="/">Back to Dashboard</a>
@endsection