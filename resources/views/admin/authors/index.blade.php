@extends('adminlte::page')

@section('title', 'Autores')

@section('content_header')
    <h1 class="m-0 text-dark">Autores</h1>
    <a href="" class="ml-auto">
        <x-adminlte-button label="Agregar" theme="success" icon="fas fa-plus"/>
    </a>
@stop

@php
    $heads = [
        '',
        'name',
        'description',
        'popularity',
        'quotes',
    ];
@endphp

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">

                <x-adminlte-datatable id="table1" :heads="$heads">
                    @foreach($authors as $author)
                        <tr>
                            <td></td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->description }}</td>
                            <td>{{ $author->popularity }}</td>
                            <td>{{ $author->quotes_count }}</td>
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