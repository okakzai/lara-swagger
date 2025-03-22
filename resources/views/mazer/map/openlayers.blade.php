@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>OpenLayers Map</h3>
				<p class="text-subtitle text-muted">A high-performance, feature-packed library for all your mapping needs.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">OpenLayers Map</li>
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
						<div id="map" class="map"><div id="popup"></div></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v9.2.4/ol.css">
<style>
	.map {
		height: 500px;
		width: 100%;
	}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/ol@v9.2.4/dist/ol.js"></script>
<script src="{{ asset('template/mazer/static/js/pages/ui-map-openlayers.js') }}"></script>
@endpush