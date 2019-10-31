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

<div class="container form">
        <div class="card mb-2 shadow">
            <div class="card-header text-center">
                    <h2>Editer l'article</h2>
            </div>
            
            <div class="card-body p-5">
                    <form action='{{route('article.update', $article->id)}}' method="POST">
                            @csrf
                            @method('put')
                        <div class="form-group row">
                            <label for="titre" class="col-md-4 col-form-label text-md-right">Titre de l'article</label>
                
                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control @error('name') is-invalid @enderror" name="titre" value="{{ $article->titre }}" required autocomplete="titre" autofocus>
                
                                    @error('titre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Merci de mettre un titre valide !</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu de l'article</label>
                    
                            <div class="col-md-6">
                                <input id="contenu" type="text-area" class="form-control @error('name') is-invalid @enderror" name="contenu" value="{{ $article->contenu }}" required autocomplete="titre" autofocus>
                    
                                    @error('contenu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Merci de mettre un texte valide !</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <input id='author_id' type='hidden' name='author_id' value={{Auth::user()->id}}>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn_read">
                                        Editer l'article
                                </button>
                                </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection

@section('content')




@endsection