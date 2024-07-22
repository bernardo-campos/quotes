@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', config('app.name'))

@section('content')

    <div class="row pt-4">
        <livewire:guest.date-input/>

        <livewire:guest.author-list
            type="births"
            title="Nacimientos"
        />

        <livewire:guest.author-list
            type="deaths"
            title="Fallecimientos"
        />

    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush
