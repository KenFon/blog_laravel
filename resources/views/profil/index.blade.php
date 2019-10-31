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
                    <h2>{{Auth::user()->name}}</h2>
            </div>
            
            <div class="card-body p-5">
                <a class="btn_read mb-3" href='{{route('article.create')}}'>Creer un nouvel article</a>
                <p>
                    @foreach ($articles as $article)
                    <div class='listArticleProfil'>
                        <h3>{{$article->titre}}</h3>
                        <div class="groupBtnProfil">
                            <form method="POST" action="{{route('article.destroy', $article->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn_profil" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <a class="btn_profil" href="{{route('article.edit', $article->id)}}"><i class="far fa-edit"></i></a>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </p>
            </div>
        </div>
    </div>

@endsection