<x-livewire-tables::table.td class="d-block w-100 h-100" colIndex="2" :column="$column">
	<div class="h-100">
		<a href="{{ route('guest.authors.show', $row->slug) }}" class="text-dark">
			<x-adminlte-profile-widget
				class="h-100"
				name="{!! $row->name !!}"
				img="{{ $row->image }}"
				desc="{!! $row->description !!}"
				layout-type="classic"/>
		</a>
	</div>
</x-livewire-tables::table.td>
