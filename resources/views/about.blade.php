@extends('headerFooter')
@section('content')
	<h2>This is About 
		@php
			echo $var ?? 'NA';
		@endphp
	</h2>
@endsection

