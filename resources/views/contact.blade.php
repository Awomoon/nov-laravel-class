@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1>Phone: {{ $phone }}</h1>
<h1>Email: {{ $email }}</h1>

<form action="submit">
  <input type="email" placeholder="Input email">
  <button>Send</button>
</form>

@endsection
