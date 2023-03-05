
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
                            <h3 class="card-title">Formulário Permissões</h3>
                        </div>


                        <form action="{{route('permissoes.store')}}" method='post'>
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                    <label for="resource">Nome da rota</label>
                                    <input name="resource" type="text" class="form-control" id="resource" name="tabela_id"
                                        placeholder="Digite um tipo de usuário">
                                </div>

                                <div class="form-group">
                                    <label for="name">Descrição da Rota</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Digite um tipo de usuário">
                                </div>

                             

                                <!-- inicio permissoes -->
                                <div class="form-group">
                                    <label for="resource">Descrição</label>
                                    <select class="form-control" aria-label="Default select example" name="tabela_id">
                                        
                                        <option selected>Escolha uma tabela</option>
                                       @foreach($tabelas as $tabela)
                                         <option value="{{$tabela->id}}">{{$tabela->name}}</option>
                                        @endforeach
                                    
                                        
                                    </select>
                                </div>
                               

                                <!-- fim permissoes -->



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
