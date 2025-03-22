@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Summernote </h3>
                <p class="text-subtitle text-muted">Super simple WYSIWYG editor. But you must include jQuery.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Summernote</li>
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
                        <h4 class="card-title">Default Editor</h4>
                    </div>
                    <div class="card-body">
                        <div id="summernote"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Word Hints</h4>
                    </div>
                    <div class="card-body">
                        <div id="hint"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/summernote/summernote-lite.css') }}">
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/form-editor-summernote.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('template/mazer/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/mazer/extensions/summernote/summernote-lite.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/summernote.js') }}"></script>
@endpush