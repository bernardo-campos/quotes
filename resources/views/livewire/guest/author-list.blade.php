<div class="col-sm-12 col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ $title }}</div>
        </div>
        <div class="card-body p-0">
            @forelse ($authors as $author)
                <a href="{{ route('guest.authors.show', $author) }}" class="text-dark">
                    <x-adminlte-profile-widget
                        class="mb-0"
                        name="{!! $author->name !!}"
                        img="{{ $author->image }}"
                        desc="{!! $author->{$yearColumn} !!} - {!! $author->description !!}"
                        layout-type="classic"/>
                </a>
            @empty
                No hay datos
            @endforelse
        </div>
        <div class="overlay d-none" wire:loading.class.remove="d-none">
            <i class="fas fa-spinner fa-5x fa-spin"></i>
        </div>
    </div>
</div>