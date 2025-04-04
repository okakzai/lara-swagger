@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Todo List</h3>
                <p class="text-subtitle text-muted">A decorated, sortable todo-list implementation.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Todo List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Task App Widget Starts -->
    <section class="tasks">
        <div class="row">
            <div class="col-lg-7">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tasks
                        </h4>
                        <ul class="list-inline d-flex mb-0">
                            <li class="d-flex align-items-center">
                                <i class="bx bx-check-circle font-medium-3 me-50"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle me-1" role="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bx-sort me-50 font-medium-3"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle" role="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0 py-1 overflow-auto">
                        <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-1">
                                        </div>
                                        <label for="checkbox-1" class="widget-todo-title ms-2">Add SCSS and JS files if
                                            required</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-success me-1">frontend</div>
                                        <div class="avatar bg-warning">
                                            <img src="{{asset('template/mazer/compiled/jpg/1.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-2">
                                        </div>
                                        <label for="checkbox-2" class="widget-todo-title ms-2">Check all the changes that you did,
                                            before you commit</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-danger me-1">backend</div>
                                        <div class="avatar bg-warning">
                                            <img src="{{asset('template/mazer/compiled/jpg/2.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item completed">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-3" checked>
                                        </div>
                                        <label for="checkbox-3" class="widget-todo-title ms-2">Dribble, Behance, UpLabs & Pinterest
                                            Post</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-rgba-primary m-0 me-50">
                                            <img src="{{asset('template/mazer/compiled/jpg/3.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-4">
                                        </div>
                                        <label for="checkbox-4" class="widget-todo-title ms-2">Fresh Design Web & Responsive
                                            Miracle</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-info me-1">Design</div>
                                        <div class="avatar bg-warning">
                                            <img src="{{asset('template/mazer/compiled/jpg/4.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-5">
                                        </div>
                                        <label for="checkbox-5" class="widget-todo-title ms-2">Add Calendar page and source and
                                            credit page in
                                            documentation</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-warning me-1">Javascript</div>
                                        <div class="avatar bg-warning">
                                            <img src="{{asset('template/mazer/compiled/jpg/5.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-6">
                                        </div>
                                        <label for="checkbox-6" class="widget-todo-title ms-2">Add Angular Starter-kit</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-warning">
                                            <img src="{{asset('template/mazer/compiled/jpg/1.jpg')}}" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Progress
                        </h4>

                    </div>
                    <div class="card-body px-0 py-1">
                        <table class="table table-borderless">
                            <tr>
                                <td class="col-3">UI Design</td>
                                <td class="col-6">
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">60%</td>
                            </tr>
                            <tr>
                                <td class="col-3">VueJS</td>
                                <td class="col-6">
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">30%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Laravel</td>
                                <td class="col-6">
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">50%</td>
                            </tr>
                            <tr>
                                <td class="col-3">ReactJS</td>
                                <td class="col-6">
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">80%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Go</td>
                                <td class="col-6">
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/dragula/dragula.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/ui-widgets-todolist.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('template/mazer/extensions/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('template/mazer/static/js/pages/ui-todolist.js') }}"></script>
@endpush