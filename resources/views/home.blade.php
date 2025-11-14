@extends ('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="my-4 text-primary">Welcome Home Buddy!!!</h1>

    <div class="card p-4 mb-4">
        <h5 class="card-title text-secondary mb-3">Age Verification Status:</h5>
        @if($age >= 18)
            <p class="h3 text-success">I am an Adult</p>
        @elseif($age < 18 && $age > 0)
            <p class="h3 text-warning">You are not yet of age</p>
        @else
            <p class="h3 text-danger">Invalid Age</p>
        @endif
    </div>

    <h2 class="mt-5 mb-3">Your Hobbies:</h2>
    <ul class="list-group">
        @foreach ($hobbies as $hobby)
            <li class="list-group-item">{{ $hobby }}</li>
        @endforeach
    </ul>

@endsection
