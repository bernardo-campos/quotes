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

            <livewire:admin.author-table />

        </div>
    </div>

    <x-adminlte-modal id="modalImg" title="" class="text-center" size="lg">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <h2 id="name"></h2>
                <figure>
                    <image class="img-fluid" src=""></image>
                    <figcaption class="font-italic" id="figcaption"></figcaption>
                </figure>
                <div id="abstract" class="tex-sm text-muted"></div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div id="bio" class="text-sm"></div>
            </div>
        </div>
    </x-adminlte-modal>

@stop

@push('js')
<script type="text/javascript">
$('#modalImg').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget) // Button that triggered the modal

    var imageUrl = button.data('image') // Extract info from data-* attributes
    var name = button.data('name')
    var bio = button.data('bio')
    var figcaption = button.data('figcaption')
    var abstract = button.data('abstract')

    var modal = $(this)
    modal.find('img').attr('src', imageUrl)
    modal.find('#name').text(name)
    modal.find('#bio').text(bio)
    modal.find('#figcaption').text(figcaption)
    modal.find('#abstract').text(abstract)
})
</script>
@endpush

@push('css')
@endpush