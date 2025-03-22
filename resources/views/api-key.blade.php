@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{$title}}</h3>
                <p class="text-subtitle text-muted">{{$description}}</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input id="copyInput" readonly value="{{ $api_key }}" type="text" name="api_key" class="form-control" placeholder="API Key" aria-label="API Key" aria-describedby="button-addon2">
                                        <button id="copyButton" class="btn btn-outline-secondary" type="button" id="button-addon2">Copy</button>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
<script>
document.getElementById("copyButton").addEventListener("click", function() {
    var copyInput = document.getElementById("copyInput");
    copyInput.select();
    copyInput.setSelectionRange(0, 99999); // Untuk perangkat mobile

    navigator.clipboard.writeText(copyInput.value)
        .then(() => {
            alert("API Key berhasil disalin!");
        })
        .catch(err => {
            console.error("Gagal menyalin API Key: ", err);
        });
});
</script>
@endsection

