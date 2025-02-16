@extends('adminlte::page')

@section('title', 'Usuários')


@section('content_header')
<h1 class="m-0 text-dark">Usuários</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de Usuários</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>CRIADO</th>
                    <th>MODIFICADO</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td >{{$user->email}} </td>
                    <td >{{$user->created_at}} </td>
                    <td >{{$user->updated_at}} </td>


                    <th class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('users.edit',[$user->id])}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>

                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Excluir
                        </a>


                    </th>

                </tr>
                @empty

                <tr>
                    <td>ainda não há permissões cadastradas</td>
                    <td></td>
                    <td>
                        <a href="{{route('users.create')}}" class="btn btn-primary">Cadastrar</a>
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>
    </div>
    {{$users->links() }}
</div>

@stop
