@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 offset-3">
                <h1> {{$title}} </h1>
                <h2>
                    @if(count($services)>0)
                        <Ul>
                            @foreach($services as $service)
                                <li> {{$service}} </li>
                            @endforeach
                        </Ul>
                    @endif
                </h2>
            </div>p
        </div>
    </div>
@endsection
