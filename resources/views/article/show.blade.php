@extends('layouts.app')

@section('header')
<div class="container">
    <div class="intro-text">
        <div class="intro-heading text-uppercase"></div>
        <div class="intro-lead-in"></div>
    </div>
</div>
@endsection


@section('content')
<div class="container article">
    <div class="card mb-2 shadow">
        <div class="card-header text-center">
            <h3 class="">{{$article->titre}}</h3>
        </div>
    <div class="card-body p-5">
        <p>
            {{$article->contenu}}
        </p>
        <blockquote class="blockquote mb-0 pt-5">
            <footer class="blockquote-footer">Auteur : <cite title="Source Title">{{$article->user->name}}</cite> </footer>
            <footer class="blockquote-footer">Ecrit le : <cite title="Source Title">{{$article->created_at}}</cite>
        </blockquote>
    </div>
    </div>
</div>
@endsection