@extends('layouts.error')

@section('title', $title)

@section('content')
<div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
        <div class="text-center">
            <img class="img-error" src="{{ env('APP_URL') }}/template/mazer/compiled/svg/error-500.svg" alt="System Error">
            <h1 class="error-title">System Error</h1>
            <p class="fs-5 text-gray-600">The website is currently unaivailable. Try again later or contact the
                developer.</p>
            <a href="{{url('/dashboard')}}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
        </div>
    </div>
</div>
@endsection
