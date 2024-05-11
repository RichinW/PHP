@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Cursos</h3>
    <div class='row'>
        @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
        <ul class="collection">
            <li class="collection-item avatar">
                <img src="{{ asset($row->imagem) }}" class="circle">
                <span class="title">{{ $row->titulo }}</span>
                <p>{{ $row->descricao }}</p>
                <p>{{ $row->valor }}</p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                <a class='btn deep-orange'
                    href="{{ route('admin.cursos.editar',$row->id) }}">Alterar</a>
                <a class='btn rede'
                    href="{{ route('admin.cursos.excluir',$row->id) }}">Excluir</a>
            </li>
        </ul>
        @endforeach
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
    </div>
</div>

@endsection