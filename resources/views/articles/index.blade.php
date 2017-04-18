@extends ('layout.master')

@section('head.title')
  Article Showcase
@stop

@section('body.content')
  @foreach ($articles as $article)
  <section>
    <h2>{{$article->title}}</h2>
    <p>
      {{$article->description}}
    </p>
    <a href="{{ route('article.show', $article->id) }}">Read more</a>
  </section>
  @endforeach
  {!! $articles->render() !!}
@stop
