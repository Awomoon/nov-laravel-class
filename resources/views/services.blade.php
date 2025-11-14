@extends ('layouts.app')

@section('title', 'Services')

@section('content')

    <h1 class="my-4 text-primary">Our Services:</h1>

    <!-- Using Bootstrap List Group to display services cleanly -->
    <ul class="list-group">
        @foreach ($services as $service)
            <!-- Each service is a list group item -->
            <li class="list-group-item h4">{{ $service }}</li>
        @endforeach
    </ul>

@endsection
