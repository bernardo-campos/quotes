<x-livewire-tables::table.cell>
    {{ $row->id }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    <x-adminlte-button
        data-toggle="modal"
        data-target="#modalImg"
        data-name="{{ $row->name }}"
        data-bio="{{ $row->bio }}"
        data-image="{{ $row->image }}"
        data-figcaption="{{ $row->description }}"
        data-abstract="{{ $row->abstract }}"
        label="Info"
        icon="{{ $row->hasImage() ? 'far fa-image' : '' }}"
        class="btn-sm py-0 px-1"/>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->name }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->age }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->description }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->popularity }}
</x-livewire-tables::table.cell>