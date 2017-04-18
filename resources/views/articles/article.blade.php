@extends ('layout.master')

@section('head.title')
  Article Detail
@stop

@section('body.content')
  <a href="{{ url('/') }}"><span class="glyphicon glyphicon-chevron-left"></span> Back to home</a>
  <section>
    <h2>{{ $article->title }}</h2>
    <p>
      {{ $article->description }}
    </p>
  </section>
    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Update</a>
    {!! Form::open([
        'route' => ['articles.destroy', $article->id],
        'method' => 'DELETE',
        'style' => 'display:inline'
    ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
