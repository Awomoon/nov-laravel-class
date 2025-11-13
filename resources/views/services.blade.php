@extends ('layouts.app')

@section('title', 'Services')

@section('content')
<h1>Our Services:</h1>
@foreach ($services as $service)
  <h2>{{ $service }}</h2>
@endforeach


@endsection
