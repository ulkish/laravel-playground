<div class="form-group">
    {!! Form::label('title', 'Post Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null,
        [
            'class'       => 'form control input-lg',
            'placeholder' => 'PHP Hacking and Slashing'
        ]
    )
    !!}
</div>
