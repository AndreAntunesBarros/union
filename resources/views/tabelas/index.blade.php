@extends('adminlte::page')

@section('title', 'Roles')


@section('content_header')
<h1 class="m-0 text-dark">TABELAS</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de funções</h3>
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
                    <th>Nome</th>                    
                    <th>Descrição</th>   
                    <th></th>              

                </tr>
            </thead>
            <tbody>
                @forelse($tabelas as $tabela)
                <tr>
                    <td>{{$tabela->id}}</td>
                    <td>{{$tabela->name}}</td>
                    <td >{{$tabela->description}} </td>
                   
                   
                    <th class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('tabelas.edit',[$tabela->id])}}">
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
                        <a href="{{route('tabelas.create')}}" class="btn btn-primary">Cadastrar</a>
                    </td>
                </tr>

                @endforelse

            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>                    
                    <th>Descrição</th>     
                    <th></th>            

                </tr>
            </tfoot>

        </table>
    </div>
    {{$tabelas->links() }}
</div>

@stop