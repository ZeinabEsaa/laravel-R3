@extends('layouts.pages')

@section('content')
	@include('includes.contact')
@endsection

@section('title')
    Contact Us
@endsection

@section('js')
	<!-- Google Map API Key JS -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
	<!-- Gmaps JS -->
	<script src="{{ asset('assets/js/gmaps.min.js')}}"></script>
	<!-- Map Active JS -->
	<script src="{{ asset('assets/js/map-active.js')}}"></script>
@endsection