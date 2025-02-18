@extends('adminlte::page')

@section('title', 'Usuários')

@include('flash::message')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            let flashMessages = document.querySelectorAll('.alert');
            flashMessages.forEach(function(message) {
                message.style.transition = "opacity 0.5s";
                message.style.opacity = "0";
                setTimeout(() => message.remove(), 500); // Remove do DOM após o fade-out
            });
        }, 3000); // Tempo antes do desaparecimento (3 segundos)
    });
</script>


@section('content_header')
    <h1 class="m-0 text-dark">Usuários</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Usuários</h3>
            <div class="card-tools">
                <form method="GET" action="{{ route('users.index') }}">
                    <div class="input-group input-group-sm" style="width: 200px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Pesquisar..."
                            value="{{ request('table_search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Criação</th>
                        <th>Modificação</th>
                        <th class="col-1 ">
                            <a href="{{ route('users.create') }}" class='btn btn-block btn-success btn-sm'
                                data-toggle="tooltip" title='Cadastra um novo usuário'>
                                <i class="fas  fa-clipboard">
                                </i>
                                Novo
                            </a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }} </td>
                            <td>{{ $user->created_at->format('d/m/Y H:i:s') }} </td>
                            <td>{{ $user->updated_at->format('d/m/Y H:i:s') }} </td>


                            <th class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('users.edit', [$user->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Editar
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                                </form>


                            </th>

                        </tr>
                    @empty

                        <tr>
                            <td>ainda não há permissões cadastradas</td>
                            <td></td>
                            <td>
                                <a href="{{ route('users.create') }}" class="btn btn-primary">Cadastrar</a>
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
        {{ $users->links() }}
    </div>

@stop
