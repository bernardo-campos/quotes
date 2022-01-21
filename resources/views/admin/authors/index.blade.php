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

            <livewire:author-table />

        </div>
    </div>

    <x-adminlte-modal id="modalImg" title="" class="text-center">
        <h2 id="name"></h2>
        <image class="img-fluid" src=""></image>
    </x-adminlte-modal>

@stop

@push('js')
<script type="text/javascript">
$('#modalImg').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal

    var imageUrl = button.data('image') // Extract info from data-* attributes
    var name = button.data('name')

    var modal = $(this)
    modal.find('img').attr('src', imageUrl)
    modal.find('#name').text(name)
})
</script>
@endpush

@push('css')
@endpush