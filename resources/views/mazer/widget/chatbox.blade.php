@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Chatbox</h3>
                <p class="text-subtitle text-muted">Our take on a chat conversation.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chatbox</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">
                                <img src="{{asset('template/mazer/compiled/jpg/1.jpg')}}" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0">Alfy</h6>
                                <span class="text-xs">Online</span>
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-4 bg-grey">
                        <div class="chat-content">
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">Hi Alfy, how can i help you?</div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-message">I'm looking for the best admin dashboard template</div>
                                    <div class="chat-message">With bootstrap certainly</div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-message">I recommend you to use Mazer Dashboard</div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-message">That's great! I like it so much :)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="message-form d-flex flex-direction-column align-items-center">
                            <a href="http://" class="black"><i data-feather="smile"></i></a>
                            <div class="d-flex flex-grow-1 ms-4">
                                <input type="text" class="form-control" placeholder="Type your message..">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/ui-widgets-chatbox.css') }}">
@endpush
