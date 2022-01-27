@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', 'Frases de ' . $author->name)

@section('content_header')
    <div class="container">
        <h1 class="text-dark">{{ $author->name }} ({{ $author->yearsOfLife() }})</h1>
        <div class="text-muted text-sm">
            {!! $author->abstract !!}
            @if($author->bio)
                <x-adminlte-button
                    data-toggle="modal"
                    data-target="#modal-author"
                    theme="link"
                    label="+ Info"
                    class="btn-sm py-0 px-1"/>
            @endif
        </div>
            <div class="text-muted text-sm">
                <b>Nacimiento:</b> {{ $author->dob ? $author->dob->format('d/m/Y') : ($author->yob ?? '?') }}
            </div>
            @if($author->dod || $author->yod)
                <div class="text-muted text-sm">
                    <b>Fallecimiento:</b> {{ optional($author->dod)->format('d/m/Y') ?? $author->yod }}
                </div>
            @endif
            @if($author->age)
                <div class="text-muted text-sm">
                    {{ $author->age }} años
                </div>
            @endif


    </div>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

                @php
                    $heads = [
                        '',
                        'Frases'
                    ];
                @endphp

                <x-adminlte-datatable id="table1" :heads="$heads">
                    @foreach($author->quotes->sortBy('length') as $quote)
                         <tr>
                            <td></td>
                            <td>
                                {{ $quote->quote }}
                            </td>
                        </tr>
                    @endforeach
                </x-adminlte-datatable>

        </div>
    </div>

    <x-adminlte-modal id="modal-author" title="{{ $author->name }}" class="text-center" size="lg">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <figure>
                    <image class="img-fluid" src="{{ $author->image }}"></image>
                    <figcaption class="font-italic" id="figcaption"></figcaption>
                </figure>
                <div id="abstract" class="text-sm text-muted">{{ $author->abstract }}</div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div id="bio" class="text-sm">{{ $author->bio }}</div>
            </div>
        </div>
    </x-adminlte-modal>

@stop

@push('js')
@endpush

@push('css')
@endpush