@extends('layouts.app')


@section('content')
    <h1>Blog Posts</h1>
    <div class="container">

            @foreach ($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
    {!! $posts->links('vendor.pagination.simple-bootstrap-4') !!}
    </div>


@endsection

