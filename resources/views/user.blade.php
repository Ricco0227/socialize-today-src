@extends('layouts.app')

@section('content')
    <h1 class="pt-4 font-weight-bold" class="card-header">{{ $user->name }}</h1>
    <h3>{{ $user->profile->description ?? ''}}</h3>
    <div><strong>{{ $user->posts->count() }}</strong> Posts</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row pt-5">

                            @foreach($user->posts as $post)
                                <div class="col-12 pb-2">
                                    <a href="/p/{{ $post->id }}" class="link">
                                        <h3>
                                            <strong>
                                                {{ $post->title }}
                                            </strong>
                                        </h3>
                                    </a>
                                </div>
                                <div class="col-12 pb-2">
                                    <a class="link" href="/p/{{ $post->id }}">
                                        {{ $post->post }}
                                    </a>
                                </div>
                                    <!-- <div class="col-12 pb-4">
                                    <a href="/p/{{ $post->id }}">
                                    <img src="/storage/{{ $post->image }}">
                                    </a>
                                </div> -->
                            @endforeach


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection