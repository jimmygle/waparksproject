<li>
	<strong><a href="{{ $reference->url }}" title="{{ $reference->name }}">{{ $reference->name }}</a></strong>
	@if ($reference->description)
		&ndash; {{ $reference->description }}
	@endif
</li>