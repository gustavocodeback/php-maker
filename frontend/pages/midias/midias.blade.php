@extends('layouts.admin')
@section('content')
    @include( 'components.midia-modal.midia-modal' )
    <div id="midias" class="row pr-3">
        <div class="col bg-light z-depth-1 rounded pb-3">
            
            <div class="page-header">
                <h2>Midias</h2>
            </div>

            <div class="row">
                <div class="col p-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Encontre suas midias..." aria-label="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Pesquisar!</button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row p-3">
                <div data-ratio="1:1"
                     data-max="2"
                     data-min="1"
                     data-input="files[]"
                     data-minwidth="100"
                     data-maxwidth="400"
                     data-minheight="100"
                     data-maxheight="400" 
                     class="midia-seletor midia-content text-center col-xs-12 col-md-2 pt-4 m-1">
                    <small>
                        Adicionar nova imagem <br>
                        <i class="fa fa-plus"></i>
                    </small>
                </div>

                @foreach( $midias as $midia )
                <div class="midia-content col-xs-12 col-md-2 p-0 m-1" title="{{ $midia->name }}">
                    <a href="{{ $midia->path() }}" data-lightbox="midias">
                        <img class="position-absolute" src="{{ $midia->path() }}">
                    </a>
                    <button {!! clickOpen( 'midia/delete/'.$midia->id ) !!} class="btn btn-danger btn-sm position-absolute" title="Remover imagem">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
@endsection