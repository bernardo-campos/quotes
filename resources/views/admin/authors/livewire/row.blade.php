<x-livewire-tables::table.cell>
    {{ $row->id }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->image)
        <x-adminlte-button
            data-toggle="modal"
            data-target="#modalImg"
            icon="far fa-image"
            data-image="/storage/{{ $row->image }}"
            data-name="{{ $row->name }}"
            class="btn-sm py-0 px-1"/>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->name }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->description }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->popularity }}
</x-livewire-tables::table.cell>