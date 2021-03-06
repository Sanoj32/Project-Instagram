@extends('layouts.app')
@section('content')
<div class="container">

    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/p/{{ $post->id }}">
                <img src="{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}
                        </span>
                    </a>
                </span>{{$post->caption}}
            </p>
        </div>
    </div>
    @endforeach
    <div class="row ">
        <div class="col-12 justify-content-center d-flex">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection