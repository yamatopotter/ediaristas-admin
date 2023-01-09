
@extends('adminlte::page')

@section('title', 'Lista de Usuários')

@section('content_header')
    <h1>Lista de Usuários</h1>
@stop

@section('content')

    @if(session('mensagem'))
        <div class="alert alert-success">
            {{session('mensagem')}}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>
                        <a href="{{route('usuarios.edit', $usuario)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('usuarios.destroy', $usuario) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="Submit" onclick="return confirm('Tem certeza que deseja apagar o usuário?')">Excluir</a>
                        </form>
                    </td>
                </tr>
            @empty
                 <tr>
                    <td colspan='3'>Nenhum registro foi encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center ">
        {{ $usuarios->links() }}
    </div>

    <div class="float-right">
        <a href="{{route('usuarios.create')}}" class="btn btn-success">Novo Usuário</a>
    </div>
@stop