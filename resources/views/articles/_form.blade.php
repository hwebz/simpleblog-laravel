<div class="form-group">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter article title...']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter article description...']) !!}
</div>
{!! Form::submit($buttonName, ['class' => 'btn btn-default']) !!}