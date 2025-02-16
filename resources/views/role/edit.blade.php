@extends('adminlte::page')

@section('title', config('app.name'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="col-md-12">

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edição de Função</h3>
                        </div>


                        <form action="{{route('roles.update',$role->id)}}" method='post'>
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="role">Name</label>
                                    <input name="role" type="text" class="form-control" id="role"
                                        value="{{$role->role}}" placeholder="Digite um tipo de usuário">
                                </div>

                                <div class="form-group">
                                    <label for="name">Descrição</label>
                                    <input name="name" type="text" class="form-control" id="name"
                                        value="{{$role->name}}" placeholder="Digite um tipo de usuário">
                                </div>

                                <!-- inicio permissoes -->
                                <div class="form-group">



                                    <div class="row">
                                        @foreach($tabelas as $tabela)
                                        @if($tabela->resources->count() > 0)
                                        <div class="card card-primary col-4">
                                            <div class="card-header">
                                                <h3 class="card-title">{{$tabela->name}}</h3>
                                            </div>


                                            <div class="card-body">
                                                @foreach($tabela->resources as $resource)

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{$resource->id}}" name="resource_id[]"
                                                        id="flexCheckIndeterminate{{$resource->id}}"  @if(in_array($resource->id,$role->resources->pluck('id')->toArray()))) checked @endif >
                                                    <label class="form-check-label"
                                                        for="flexCheckIndeterminate{{$resource->id}}">
                                                        {{$resource->name}}
                                                    </label>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>









                                </div>





                                <!-- fim permissoes -->


                            </div>

                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary">Salvar</button>
                                {{-- <a href="{{route('permissoes.create')}}" class="btn btn-success">Cadastrar Permissões</a> --}}

                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>


</div>
@stop
