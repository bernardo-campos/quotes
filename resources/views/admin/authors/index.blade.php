@extends('adminlte::page')

@section('title', 'Autores')

@section('content_header')
    <h1 class="m-0 text-dark">Autores</h1>
    <a href="" class="ml-auto">
        <x-adminlte-button label="Agregar" theme="success" icon="fas fa-plus"/>
    </a>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            <livewire:author-table />

        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush