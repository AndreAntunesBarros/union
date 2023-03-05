@extends('adminlte::page')

@section('title', 'Roles')


@section('content_header')
<h1 class="m-0 text-dark">Usuários</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de usuários</h3>
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
   

    <div class="card-body table-responsive p-0" style="height: 500px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>..</th>
                    <th> <a href="{{route('users.create')}}" class='btn btn-block btn-success btn-xs'>Novo</a></th>

                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td><a href="{{route('users.show',[$user->id])}}">{{$user->name}}</a></td>
                    <td>
                           <ul>

                           @forelse($user->roles as $role)
                                <li>{{$role->name}}</li>
                            @empty
                                <li>Não Tipo de usuário</li>
                            @endforelse
                           </ul>

                    </td>
                    <td>

                        <a href="{{route('users.edit',[$user->id])}}"
                            class='btn btn-block btn-primary btn-xs'>Editar</a>
                        <a href="http://" class='btn btn-block btn-danger btn-xs'>Excluir</a>

                    </td>
                    

                </tr>
                @empty
<tr>...</tr>
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

</div>


@stop