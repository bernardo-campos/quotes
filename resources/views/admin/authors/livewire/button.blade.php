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
    class="btn-sm py-0 px-1"
/>