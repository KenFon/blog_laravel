@extends('layouts.app')

@section('header')
<div class="container">
    <div class="intro-text">
      <div class="intro-heading">Bienvenue sur THE blog</div>
      <div class="intro-lead-in"><p>Découvrez nos articles sur les Retrievers de la nouvelle ecosse !</p></div>
    </div>
  </div>
@endsection

@section('content')
<div class="container listArticle">
@foreach($articles as $article)
<div class="card mb-2 shadow-sm @if($loop->first)jean-michel @else tailleArticle @endif">
    <div class="card-header">
      <h3>{{$article->titre}}</h3>
    </div>
    <div class="card-body">
        <p>@if($loop->first)
            {{Str::limit($article->contenu, $limit=250, $end= ' ...')}}
            @else
          {{Str::limit($article->contenu, $limit=100, $end= ' ...')}}
        </p>
        @endif
        
      <blockquote class="blockquote mb-0">
        <footer class="blockquote-footer">Auteur : <cite title="Source Title">{{$article->user->name}}</cite></footer>
        <a class="btn_read mb-3" href={{route('article.show', $article->id)}}>Read more</a>
      </blockquote>
    </div>
  </div>
@endforeach
</div>
@endsection


