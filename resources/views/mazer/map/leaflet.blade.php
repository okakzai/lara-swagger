@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Leaflet Map</h3>
				<p class="text-subtitle text-muted">an open-source JavaScript library for mobile-friendly interactive maps.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Leaflet Map</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Our Location</h5>
					</div>
					<div class="card-body">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<style>
	#map {
		height: 500px;
		width: 100%;
	}
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="{{ asset('template/mazer/static/js/pages/ui-map-leaflet.js') }}"></script>
@endpush