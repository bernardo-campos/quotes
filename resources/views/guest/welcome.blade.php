@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', config('app.name'))

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
<link rel="stylesheet" href="{{ asset('css/myStyles.css') }}">
@endpush
