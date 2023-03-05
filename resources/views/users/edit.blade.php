@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="col-md-12">

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Formulário Tipo Usuário</h3>
                        </div>


                        <form action="{{route('users.update',[$user->id])}}" method='post'>
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        value="{{$user->name}}" placeholder="Digite um nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        value="{{$user->email}}" placeholder="Digite um email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input name="password" type="password" class="form-control" id="password" value=""
                                        autocomplete="off" placeholder="Digite um tipo de usuário">
                                </div>

                                <div class="form-group">
                                    @forelse($roles as $role)

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$role->id}}"
                                            id="flexCheckDefault" name="role_id[]"
                                            @if(in_array($role->id,$user->roles->pluck('id')->toArray()))) checked
                                        @endif>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$role->name}}
                                        </label>
                                    </div>


                                    @empty
                                    <div class="alert alert-primary" role="alert">
                                        Não existem Tipos de usuários cadastrados ainda, clique<a
                                            href="{{route('roles.create')}}" class='btn btn-success b'>aqui</a> para
                                        cadastrar.
                                    </div>
                                    @endforelse
                                </div>



                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

@stop
