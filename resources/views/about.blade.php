@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<h1>About Page</h1>
<h2>What do you want to know about {{ $name }}</h2>
<p>This is rendered inside the layout.</p>
@endsection
