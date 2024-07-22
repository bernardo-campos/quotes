<div class="col-12">
    <h4>
        Efemérides 📅 {{ $carbonDate->isoFormat('D [de] MMMM') }}
        <button
            class="btn btn-outline-primary border-0"
            data-toggle="modal"
            data-target="#edit-date"
            ><i class="fas fa-edit"></i>
        </button>
    </h4>
    <x-adminlte-modal
        wire:ignore
        id="edit-date"
        title="Editar fecha"
        theme="primary"
        icon="fas fa-edit"
        size='sm'
        v-centered
        disable-animations
    >
        <input
            id="date"
            wire:model="date"
            type="date"
            class="form-control"
        >
         <x-slot name="footerSlot">
            <x-adminlte-button
                theme="primary"
                data-dismiss="modal"
                label="Aceptar"
            />
        </x-slot>
    </x-adminlte-modal>
</div>