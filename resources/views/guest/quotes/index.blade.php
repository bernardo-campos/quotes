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
<style type="text/css">
    mark {
        padding: 0!important;
        background-color: yellow!important;
    }
</style>
@endpush
