@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <h1 class="my-4 text-primary">Contact Us</h1>

    <div class="card p-4">

        <div class="mb-3">
            <h5 class="card-subtitle mb-2 text-muted">Phone Number</h5>
            <p class="h4 text-dark">{{ $phone }}</p>
        </div>

        <div class="mb-3">
            <h5 class="card-subtitle mb-2 text-muted">Email Address</h5>
            <p class="h4 text-dark">{{ $email }}</p>
        </div>

    </div>
@endsection
