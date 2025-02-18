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
                                <h3 class="card-title">Nova Função</h3>
                            </div>


                            <form action="{{ route('roles.store') }}" method='post'>
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="role">Nome</label>
                                        <input name="role" type="text" class="form-control" id="role"
                                            placeholder="Digite a função">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Descrição</label>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Digite a descrição do função">
                                    </div>

                                    <!-- inicio permissoes -->
                                    <div class="form-group">



                                        <div class="row">
                                            @foreach ($tabelas as $tabela)
                                                @if ($tabela->resources->count() > 0)
                                                    <div class="card card-primary col-4">
                                                        <div class="card-header">
                                                            <h3 class="card-title">{{ $tabela->name }}</h3>
                                                        </div>


                                                        <div class="card-body">
                                                            @foreach ($tabela->resources as $resource)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="{{ $resource->id }}" name="resource_id[]"
                                                                        id="flexCheckIndeterminate{{ $resource->id }}">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckIndeterminate{{ $resource->id }}">
                                                                        {{ $resource->name }}
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
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
