@extends('adminlte::page')

@section('title', config('app.name'))

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalUsers }}</h3>
                <p>Usuários Cadastrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalRoles }}</h3>
                <p>Funções Cadastradas</p>
            </div>
            <div class="icon">
                <i class="fas fa-cogs"></i>
            </div>
        </div>
    </div>
</div>
@stop
