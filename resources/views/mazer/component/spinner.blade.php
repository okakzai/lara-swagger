@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Spinner</h3>
                <p class="text-subtitle text-muted">Indicate the loading state of a component or page with Bootstrap
                    spinners, built entirely with HTML, CSS, and no JavaScript.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Spinner</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Spinners</h5>
                    </div>
                    <div class="card-body">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Sizing</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Loader</h5>
                    </div>
                    <div class="card-body">
                        <img src="data:image/svg+xml,%3c!--%20By%20Sam%20Herbert%20(@sherb),%20for%20everyone.%20More%20@%20http://goo.gl/7AJzbL%20--%3e%3csvg%20width='55'%20height='80'%20viewBox='0%200%2055%2080'%20xmlns='http://www.w3.org/2000/svg'%20fill='%235d79d3'%3e%3cg%20transform='matrix(1%200%200%20-1%200%2080)'%3e%3crect%20width='10'%20height='20'%20rx='3'%3e%3canimate%20attributeName='height'%20begin='0s'%20dur='4.3s'%20values='20;45;57;80;64;32;66;45;64;23;66;13;64;56;34;34;2;23;76;79;20'%20calcMode='linear'%20repeatCount='indefinite'%20/%3e%3c/rect%3e%3crect%20x='15'%20width='10'%20height='80'%20rx='3'%3e%3canimate%20attributeName='height'%20begin='0s'%20dur='2s'%20values='80;55;33;5;75;23;73;33;12;14;60;80'%20calcMode='linear'%20repeatCount='indefinite'%20/%3e%3c/rect%3e%3crect%20x='30'%20width='10'%20height='50'%20rx='3'%3e%3canimate%20attributeName='height'%20begin='0s'%20dur='1.4s'%20values='50;34;78;23;56;23;34;76;80;54;21;50'%20calcMode='linear'%20repeatCount='indefinite'%20/%3e%3c/rect%3e%3crect%20x='45'%20width='10'%20height='30'%20rx='3'%3e%3canimate%20attributeName='height'%20begin='0s'%20dur='2s'%20values='30;45;13;80;56;72;45;76;34;23;67;30'%20calcMode='linear'%20repeatCount='indefinite'%20/%3e%3c/rect%3e%3c/g%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='57'%20height='57'%20stroke='%235d79d3'%20viewBox='0%200%2057%2057'%3e%3cg%20fill='none'%20fill-rule='evenodd'%3e%3cg%20stroke-width='2'%20transform='translate(1%201)'%3e%3ccircle%20cx='5'%20cy='50'%20r='5'%3e%3canimate%20attributeName='cy'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20repeatCount='indefinite'%20values='50;5;50;50'/%3e%3canimate%20attributeName='cx'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20repeatCount='indefinite'%20values='5;27;49;5'/%3e%3c/circle%3e%3ccircle%20cx='27'%20cy='5'%20r='5'%3e%3canimate%20attributeName='cy'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20from='5'%20repeatCount='indefinite'%20to='5'%20values='5;50;50;5'/%3e%3canimate%20attributeName='cx'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20from='27'%20repeatCount='indefinite'%20to='27'%20values='27;49;5;27'/%3e%3c/circle%3e%3ccircle%20cx='49'%20cy='50'%20r='5'%3e%3canimate%20attributeName='cy'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20repeatCount='indefinite'%20values='50;50;5;50'/%3e%3canimate%20attributeName='cx'%20begin='0s'%20calcMode='linear'%20dur='2.2s'%20from='49'%20repeatCount='indefinite'%20to='49'%20values='49;5;27;49'/%3e%3c/circle%3e%3c/g%3e%3c/g%3e%3c/svg%3e" class="me-4" style="width: 3rem"
                            alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20width='135'%20height='135'%20viewBox='0%200%20135%20135'%20xmlns='http://www.w3.org/2000/svg'%20fill='%235d79d3'%3e%3cpath%20d='M67.447%2058c5.523%200%2010-4.477%2010-10s-4.477-10-10-10-10%204.477-10%2010%204.477%2010%2010%2010zm9.448%209.447c0%205.523%204.477%2010%2010%2010%205.522%200%2010-4.477%2010-10s-4.478-10-10-10c-5.523%200-10%204.477-10%2010zm-9.448%209.448c-5.523%200-10%204.477-10%2010%200%205.522%204.477%2010%2010%2010s10-4.478%2010-10c0-5.523-4.477-10-10-10zM58%2067.447c0-5.523-4.477-10-10-10s-10%204.477-10%2010%204.477%2010%2010%2010%2010-4.477%2010-10z'%3e%3canimateTransform%20attributeName='transform'%20type='rotate'%20from='0%2067%2067'%20to='-360%2067%2067'%20dur='2.5s'%20repeatCount='indefinite'/%3e%3c/path%3e%3cpath%20d='M28.19%2040.31c6.627%200%2012-5.374%2012-12%200-6.628-5.373-12-12-12-6.628%200-12%205.372-12%2012%200%206.626%205.372%2012%2012%2012zm30.72-19.825c4.686%204.687%2012.284%204.687%2016.97%200%204.686-4.686%204.686-12.284%200-16.97-4.686-4.687-12.284-4.687-16.97%200-4.687%204.686-4.687%2012.284%200%2016.97zm35.74%207.705c0%206.627%205.37%2012%2012%2012%206.626%200%2012-5.373%2012-12%200-6.628-5.374-12-12-12-6.63%200-12%205.372-12%2012zm19.822%2030.72c-4.686%204.686-4.686%2012.284%200%2016.97%204.687%204.686%2012.285%204.686%2016.97%200%204.687-4.686%204.687-12.284%200-16.97-4.685-4.687-12.283-4.687-16.97%200zm-7.704%2035.74c-6.627%200-12%205.37-12%2012%200%206.626%205.373%2012%2012%2012s12-5.374%2012-12c0-6.63-5.373-12-12-12zm-30.72%2019.822c-4.686-4.686-12.284-4.686-16.97%200-4.686%204.687-4.686%2012.285%200%2016.97%204.686%204.687%2012.284%204.687%2016.97%200%204.687-4.685%204.687-12.283%200-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626%200-12%205.373-12%2012s5.374%2012%2012%2012c6.628%200%2012-5.373%2012-12zm-19.823-30.72c4.687-4.686%204.687-12.284%200-16.97-4.686-4.686-12.284-4.686-16.97%200-4.687%204.686-4.687%2012.284%200%2016.97%204.686%204.687%2012.284%204.687%2016.97%200z'%3e%3canimateTransform%20attributeName='transform'%20type='rotate'%20from='0%2067%2067'%20to='360%2067%2067'%20dur='8s'%20repeatCount='indefinite'/%3e%3c/path%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='105'%20height='105'%20fill='%235d79d3'%20viewBox='0%200%20105%20105'%3e%3ccircle%20cx='12.5'%20cy='12.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='0s'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='12.5'%20cy='52.5'%20r='12.5'%20fill-opacity='.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='100ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='52.5'%20cy='12.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='300ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='52.5'%20cy='52.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='600ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='92.5'%20cy='12.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='800ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='92.5'%20cy='52.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='400ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='12.5'%20cy='92.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='700ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='52.5'%20cy='92.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='500ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3ccircle%20cx='92.5'%20cy='92.5'%20r='12.5'%3e%3canimate%20attributeName='fill-opacity'%20begin='200ms'%20calcMode='linear'%20dur='1s'%20repeatCount='indefinite'%20values='1;.2;1'/%3e%3c/circle%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='140'%20height='64'%20fill='%235d79d3'%20viewBox='0%200%20140%2064'%3e%3cpath%20fill-opacity='.5'%20d='M30.262%2057.02L7.195%2040.723c-5.84-3.976-7.56-12.06-3.842-18.063%203.715-6%2011.467-7.65%2017.306-3.68l4.52%203.76%202.6-5.274c3.717-6.002%2011.47-7.65%2017.305-3.68%205.84%203.97%207.56%2012.054%203.842%2018.062L34.49%2056.118c-.897%201.512-2.793%201.915-4.228.9z'%3e%3canimate%20attributeName='fill-opacity'%20begin='0s'%20calcMode='linear'%20dur='1.4s'%20repeatCount='indefinite'%20values='0.5;1;0.5'/%3e%3c/path%3e%3cpath%20fill-opacity='.5'%20d='M105.512%2056.12l-14.44-24.272c-3.716-6.008-1.996-14.093%203.843-18.062%205.835-3.97%2013.588-2.322%2017.306%203.68l2.6%205.274%204.52-3.76c5.84-3.97%2013.592-2.32%2017.307%203.68%203.718%206.003%201.998%2014.088-3.842%2018.064L109.74%2057.02c-1.434%201.014-3.33.61-4.228-.9z'%3e%3canimate%20attributeName='fill-opacity'%20begin='0.7s'%20calcMode='linear'%20dur='1.4s'%20repeatCount='indefinite'%20values='0.5;1;0.5'/%3e%3c/path%3e%3cpath%20d='M67.408%2057.834l-23.01-24.98c-5.864-6.15-5.864-16.108%200-22.248%205.86-6.14%2015.37-6.14%2021.234%200L70%2016.168l4.368-5.562c5.863-6.14%2015.375-6.14%2021.235%200%205.863%206.14%205.863%2016.098%200%2022.247l-23.007%2024.98c-1.43%201.556-3.757%201.556-5.188%200z'/%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='38'%20height='38'%20stroke='%235d79d3'%20viewBox='0%200%2038%2038'%3e%3cg%20fill='none'%20fill-rule='evenodd'%3e%3cg%20stroke-width='2'%20transform='translate(1%201)'%3e%3ccircle%20cx='18'%20cy='18'%20r='18'%20stroke-opacity='.5'/%3e%3cpath%20d='M36%2018c0-9.94-8.06-18-18-18'%3e%3canimateTransform%20attributeName='transform'%20dur='1s'%20from='0%2018%2018'%20repeatCount='indefinite'%20to='360%2018%2018'%20type='rotate'/%3e%3c/path%3e%3c/g%3e%3c/g%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='44'%20height='44'%20stroke='%235d79d3'%20viewBox='0%200%2044%2044'%3e%3cg%20fill='none'%20fill-rule='evenodd'%20stroke-width='2'%3e%3ccircle%20cx='22'%20cy='22'%20r='1'%3e%3canimate%20attributeName='r'%20begin='0s'%20calcMode='spline'%20dur='1.8s'%20keySplines='0.165,%200.84,%200.44,%201'%20keyTimes='0;%201'%20repeatCount='indefinite'%20values='1;%2020'/%3e%3canimate%20attributeName='stroke-opacity'%20begin='0s'%20calcMode='spline'%20dur='1.8s'%20keySplines='0.3,%200.61,%200.355,%201'%20keyTimes='0;%201'%20repeatCount='indefinite'%20values='1;%200'/%3e%3c/circle%3e%3ccircle%20cx='22'%20cy='22'%20r='1'%3e%3canimate%20attributeName='r'%20begin='-0.9s'%20calcMode='spline'%20dur='1.8s'%20keySplines='0.165,%200.84,%200.44,%201'%20keyTimes='0;%201'%20repeatCount='indefinite'%20values='1;%2020'/%3e%3canimate%20attributeName='stroke-opacity'%20begin='-0.9s'%20calcMode='spline'%20dur='1.8s'%20keySplines='0.3,%200.61,%200.355,%201'%20keyTimes='0;%201'%20repeatCount='indefinite'%20values='1;%200'/%3e%3c/circle%3e%3c/g%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                        <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='45'%20height='45'%20stroke='%235d79d3'%20viewBox='0%200%2045%2045'%3e%3cg%20fill='none'%20fill-rule='evenodd'%20stroke-width='2'%20transform='translate(1%201)'%3e%3ccircle%20cx='22'%20cy='22'%20r='6'%20stroke-opacity='0'%3e%3canimate%20attributeName='r'%20begin='1.5s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='6;22'/%3e%3canimate%20attributeName='stroke-opacity'%20begin='1.5s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='1;0'/%3e%3canimate%20attributeName='stroke-width'%20begin='1.5s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='2;0'/%3e%3c/circle%3e%3ccircle%20cx='22'%20cy='22'%20r='6'%20stroke-opacity='0'%3e%3canimate%20attributeName='r'%20begin='3s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='6;22'/%3e%3canimate%20attributeName='stroke-opacity'%20begin='3s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='1;0'/%3e%3canimate%20attributeName='stroke-width'%20begin='3s'%20calcMode='linear'%20dur='3s'%20repeatCount='indefinite'%20values='2;0'/%3e%3c/circle%3e%3ccircle%20cx='22'%20cy='22'%20r='8'%3e%3canimate%20attributeName='r'%20begin='0s'%20calcMode='linear'%20dur='1.5s'%20repeatCount='indefinite'%20values='6;1;2;3;4;5;6'/%3e%3c/circle%3e%3c/g%3e%3c/svg%3e" class="me-4" style="width: 3rem" alt="audio">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Spinner Growing</h5>
                    </div>
                    <div class="card-body">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Spinner-in-button</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="visually-hidden">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-secondary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                <span class="visually-hidden">Loading...</span>
                            </button>
                            <button class="btn btn-secondary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Processing...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


