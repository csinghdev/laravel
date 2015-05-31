
@extends('app')

@section('content')

    @if($first == 'Chandresh')
        <h1>About Chandresh</h1>
    @else
        <h1>Hi Mr. Singh</h1>
    @endif

    <p>
        I'm a developer who like to develop websites, apps and Android Applications
    </p>

    @if(count($people))
        <h3>Some of my Group members are :</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person  }}</li>
            @endforeach
        </ul>
    @endif
@stop