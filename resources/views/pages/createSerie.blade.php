@extends('template.template')

@section('title', 'Serie | Create')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{ route('index') }}">Series</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <form method="POST" action="{{ route('serie.process') }}">
        @csrf
        <div class="mb-3">
            <label for="serie_name" class="form-label">Nome da serie</label>
            <input type="text" class="form-control" id="serie_name" name="serie_name">
        </div>

        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-outline-secondary" href="{{ route('index') }}">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
@endsection
