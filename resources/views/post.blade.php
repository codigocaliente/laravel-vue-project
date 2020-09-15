@extends('layouts.app_public')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        @if ($post->image)
        <img src="{{ $post->get_image}}" alt="" class="card-img-top">
        @elseif($post->iframe)
        <div class="embed-responsive embed-responsive-16by9">
            {!! $post->iframe !!}
        </div>
        @endif
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->body }}</p>
        <p class="text-muted mb-0">
            <em>
                &ndash; {{ $post->user->name }}
            </em>
            {{ $post->created_at->format('d M y') }}
        </p>
    </div>
</div>

@endsection