@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>

    @if ($page->image)
        <img src="{{ $page->image }}" style="object-fit: cover; height: 250px; width: 100%;">
    @endif

    <p>
        <strong>{{ $page->prettyDate('F j, Y') }}</strong><br>
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p>

    <hr>

    @yield('postContent')

    <hr>

    @include('_partials.share')

@endsection
