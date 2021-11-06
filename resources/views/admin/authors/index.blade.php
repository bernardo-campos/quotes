@extends('adminlte::page')

@section('title', 'Autores')

@section('content_header')
    <h1 class="m-0 text-dark">Autores</h1>
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
                            <th>name</th>
                            <th>description</th>
                            <th>popularity</th>
                            <th>quotes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>{{ $author->id }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->description }}</td>
                                <td>{{ $author->popularity }}</td>
                                <td>{{ $author->quotes_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $authors->links() }}
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