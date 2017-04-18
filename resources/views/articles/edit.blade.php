@extends('layout.master')

@section('head.title')
  Update article
@stop

@section ('body.content')
  <h2>Update article</h2>
  @if (count($errors) > 0)
    <div>
      <strong>Whoops!</strong> There were some problems with your input.<br /><br />
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    </div>
  @endif

  <!-- Using Illmuminate\HTML -->
  {!! Form::model($article, [
          'route' => ['article.update', $article->id],
          'method' => 'PUT',
          'class' => 'form-horizontal'
      ])
  !!}
    @include('articles._form', ['buttonName' => 'Update'])
  {!! Form::close() !!}
@stop
