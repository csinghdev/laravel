
@extends('app')

@section('content')

    @if($first == 'Chandresh')
        <h1>Hi Chandresh</h1>
    @else
        <h1>Hi Mr. Singh</h1>
    @endif

    <p>
        This is a about me page where i'm not gonna write anything , since it's just a demo page of the project but will write it as soon as i start working on a real project
    </p>

    @if(count($people))
        <h3>people i like ...</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person  }}</li>
            @endforeach
        </ul>
    @endif
@stop