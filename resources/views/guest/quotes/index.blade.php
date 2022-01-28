@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', 'Listado de Frases')

@section('content')

    <div class="card">
        <div class="card-body">

            <livewire:guest.quote-table />

        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush
