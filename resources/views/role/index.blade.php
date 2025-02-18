@extends('adminlte::page')

@section('title', 'Funções')

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
    <h1 class="m-0 text-dark">Funções</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Funções</h3>
            <div class="card-tools">
                <form method="GET" action="{{ route('roles.index') }}">
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
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"> @include('flash::message')</div>


                </div>
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th class="col-1">ID</th>
                            <th class="col-3">Nome</th>
                            <th>Descrição</th>
                            <th>Permissões</th>
                            <th class="col-1 ">
                                <a href="{{ route('roles.create') }}" class='btn btn-block btn-success btn-sm'
                                    data-toggle="tooltip" title='Cadastra uma nova função'>
                                    <i class="fas  fa-clipboard">
                                    </i>
                                    Nova
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->role }}</td>
                                <td>
                                    @if ($role->resources->count())
                                        Possui {{ $role->resources->count() }} Permissões.
                                    @else
                                        <span>Não possui permissões</span>
                                    @endif

                                </td>
                                <th class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('roles.edit', [$role->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Editar
                                    </a>

                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Tem certeza que deseja excluir esta função?')">
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
                                    <a href="{{ route('roles.create') }}" class="btn btn-primary">Cadastrar</a>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>
            </div>
            {{ $roles->links() }}
        </div>

    @stop
