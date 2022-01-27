@extends('adminlte::page')

@section('title', 'Frases')

@section('content_header')
    <h1 class="m-0 text-dark">Frases</h1>
    <a href="" class="ml-auto">
        <x-adminlte-button label="Agregar" theme="success" icon="fas fa-plus"/>
    </a>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            <livewire:admin.quote-table />

        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush