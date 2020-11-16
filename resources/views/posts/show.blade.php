@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 offset-2">
                <div>
                    <h3>{{ $post->user->name }}</h3>
                </div>
            </div>
            <div class="col-8 offset-2">
                <div>
                    <h4>{{ $post->title }}</h4>
                </div>
            </div>
            <div class="col-8 offset-2">
                <div>
                    <h5>{{ $post->post }}</h5>
                </div>
            </div>
            <div class="col-8 offset-2">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        </div>
    </div>
@endsection