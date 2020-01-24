@extends('layouts.app')


@section('content')
    <h1>Blog Posts</h1>
        <ul>
            @forelse ($posts as $post)
                <li>{{ $post->title }}</li>
            @empty
                <li>No posts available.</li>
            @endforelse
        </ul>
@endsection
