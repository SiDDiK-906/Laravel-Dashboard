@forelse ($data as $value)
	<h3>{{ $value }}</h3>
	@empty
	<p>No Data Available</p>
@endforelse