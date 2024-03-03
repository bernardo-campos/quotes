@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', 'Listado de Autores')

@section('content')

    <div class="card">
        <div class="card-body">

            <livewire:guest.author-table />

        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
<style type="text/css">
    .authors-main tbody {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 0.5rem;
    }
    .authors-main tbody .card .nav-link {
        padding: 0;
    }
    .authors-main tbody h5.widget-user-desc {
        font-size: 0.95rem;
    }
    .overflow-y-hidden {
        overflow-y: hidden;
    }
</style>
@endpush
