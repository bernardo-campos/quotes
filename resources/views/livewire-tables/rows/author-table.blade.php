<x-livewire-tables::bs4.table.cell class="d-block w-100 h-100">
	<div class="h-100">
		<a href="{{ route('guest.authors.show', $row) }}" class="text-dark">
			<x-adminlte-profile-widget
				class="h-100"
				name="{!! $row->name !!}"
				img="{{ $row->image }}"
				desc="{!! $row->description !!}"
				layout-type="classic"/>
		</a>
	</div>
</x-livewire-tables::bs4.table.cell>
