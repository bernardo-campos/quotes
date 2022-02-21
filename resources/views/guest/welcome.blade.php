@extends('adminlte::page')

@section('layout_topnav', true)

@section('title', config('app.name'))

@section('content')

    <div class="row pt-4">
        <div class="col-12">
            <h4>Efemérides</h4>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Cumpleaños</div>
                </div>
                <div class="card-body p-0">
                    @forelse ($birthdays as $author)
                        <a href="{{ route('guest.authors.show', $author) }}" class="text-dark">
                            <x-adminlte-profile-widget
                                class="mb-0"
                                name="{!! $author->name !!}"
                                img="{{ $author->image }}"
                                desc="{!! $author->yob !!} - {!! $author->description !!}"
                                layout-type="classic"/>
                        </a>
                    @empty
                        No hay datos
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Fallecimientos</div>
                </div>
                <div class="card-body p-0">
                    @forelse ($deaths as $author)
                        <a href="{{ route('guest.authors.show', $author) }}" class="text-dark">
                            <x-adminlte-profile-widget
                                class="mb-0"
                                name="{!! $author->name !!}"
                                img="{{ $author->image }}"
                                desc="{!! $author->yod !!} - {!! $author->description !!}"
                                layout-type="classic"/>
                        </a>
                    @empty
                        No hay datos
                    @endforelse
                </div>
            </div>
        </div>

    </div>

@stop

@push('js')
@endpush

@push('css')
@endpush
