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
            <div class="row">


                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>quote</th>
                            <th>author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->id }}</td>
                                <td>{{ $quote->quote }}</td>
                                <td>{{ $quote->author->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $quotes->links() }}
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush