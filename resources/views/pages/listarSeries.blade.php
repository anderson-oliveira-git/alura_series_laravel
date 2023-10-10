@extends('template.template')

@section('title', 'Controle de series')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Series</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary" href="{{ route('serie.create') }}">Adicionar</a>
    </div>
    @isset($series)
        <ul class="list-group">
            @foreach ($series as $serie)
                <li class="list-group-item">{{ $serie->name }}</li>
            @endforeach
        </ul>
    @endisset
@endsection
