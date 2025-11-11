@extends ('layouts.app')

@section('title', 'Home')

@section('content')
<h1>Welcome Home Buddy!!!</h1>
@if($age >= 18)
 <h1>I am an Adult</h1>
@elseif($age < 18 && $age > 0)
 <h1>You are a not yet of age</h1>
@else
 <h1>Invalid Age</h1>
@endif

@foreach ($hobbies as $hobby)
  <h1>{{ $hobby }}</h1>
@endforeach

@endsection
