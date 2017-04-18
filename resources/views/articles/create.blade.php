@extends('layout.master')

@section('head.title')
  Add new article
@stop

@section ('body.content')
  <h2>Add new article</h2>
  @if (count($errors) > 0)
    <div>
      <strong>Whoops!</strong> There were some problems with your input.<br /><br />
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    </div>
  @endif
  <!-- <form class="form-horizontal" action="{{ route('articles.store') }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
      <label for="title">Title:</label>
      <input class="form-control" type="text" name="title" placeholder="Enter article title..." />
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" placeholder="Enter article description..."></textarea>
    </div>
    <input class="btn btn-default" type="submit" value="Add" />
  </form> -->

  <!-- Using Illmuminate\HTML -->
  {!! Form::open([
          'route' => ['articles.store'],
          'method' => 'POST',
          'class' => 'form-horizontal'
      ])
  !!}
    @include('articles._form', ['buttonName' => 'Add'])
  {!! Form::close() !!}
@stop
