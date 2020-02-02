@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col">
            {!! Form::open(['route' => 'posts.store'], ['class' => 'form']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Post Title',
                    ['class' => 'control-label'])
                !!}
                {!!
                    Form::text('title', null,
                    [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'PHP Hacking and Pizza'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Content',
                    ['class' => 'control-label'])
                !!}
                {!!
                    Form::textarea('content', null,
                    [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Write the post here!'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Post',
                    [
                        'class' => 'btn btn-info btn-lg',
                        'style' => 'width: 100%'
                    ])
                !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
