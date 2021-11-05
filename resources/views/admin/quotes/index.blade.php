@extends('adminlte::page')

@section('title', 'Frases')

@section('content_header')
    <h1 class="m-0 text-dark">Frases</h1>
    <a href="" class="ml-auto">
        <x-adminlte-button label="Agregar" theme="success" icon="fas fa-plus"/>
    </a>
@stop

@php
    $heads = [
        '',
        'id',
        'quote',
        'author',
    ];
@endphp

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">

                <x-adminlte-datatable id="table1" :heads="$heads">
                    @foreach($quotes as $quote)
                        <tr>
                            <td></td>
                            <td>{{ $quote->id }}</td>
                            <td>{{ $quote->quote }}</td>
                            <td>{{ $quote->author->name }}</td>
                        </tr>
                    @endforeach
                </x-adminlte-datatable>

            </div>
        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush