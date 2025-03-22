<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiKeyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard',[
            'title' => 'Dashboard',
            'menu' => false,
            'submenu' => false,
        ]);
    });

    Route::get('/api-key', [ApiKeyController::class, 'getKey']);
    Route::post('/api-key', [ApiKeyController::class, 'generateKey']);
    Route::get('/api-documentation', [ApiKeyController::class, 'getDoc']);

    Route::get('/component/accordion', function () {
        return view('mazer/component/accordion',[
            'title' => 'Accordion',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/alert', function () {
        return view('mazer/component/alert',[
            'title' => 'Alert',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/badge', function () {
        return view('mazer/component/badge',[
            'title' => 'Badge',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/breadcrumb', function () {
        return view('mazer/component/breadcrumb',[
            'title' => 'Breadcrumb',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/button', function () {
        return view('mazer/component/button',[
            'title' => 'Button',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/card', function () {
        return view('mazer/component/card',[
            'title' => 'Card',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/carousel', function () {
        return view('mazer/component/carousel',[
            'title' => 'Carousel',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/collapse', function () {
        return view('mazer/component/collapse',[
            'title' => 'Collapse',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/dropdown', function () {
        return view('mazer/component/dropdown',[
            'title' => 'Dropdown',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/listgroup', function () {
        return view('mazer/component/listgroup',[
            'title' => 'List Group',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/modal', function () {
        return view('mazer/component/modal',[
            'title' => 'Modal',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/navs', function () {
        return view('mazer/component/navs',[
            'title' => 'Navs',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/pagination', function () {
        return view('mazer/component/pagination',[
            'title' => 'Pagination',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/placeholder', function () {
        return view('mazer/component/placeholder',[
            'title' => 'Placeholder',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/progress', function () {
        return view('mazer/component/progress',[
            'title' => 'Progress',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/spinner', function () {
        return view('mazer/component/spinner',[
            'title' => 'Spinner',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/toasts', function () {
        return view('mazer/component/toasts',[
            'title' => 'Toasts',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/tooltip', function () {
        return view('mazer/component/tooltip',[
            'title' => 'Tooltip',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/avatar', function () {
        return view('mazer/extra-component/avatar',[
            'title' => 'Avatar',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/comment', function () {
        return view('mazer/extra-component/comment',[
            'title' => 'Comment',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/divider', function () {
        return view('mazer/extra-component/divider',[
            'title' => 'Divider',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/datepicker', function () {
        return view('mazer/extra-component/datepicker',[
            'title' => 'Date Picker',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/flag', function () {
        return view('mazer/extra-component/flag',[
            'title' => 'Flag',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/sweetalert', function () {
        return view('mazer/extra-component/sweetalert',[
            'title' => 'Sweet Alert',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/toastify', function () {
        return view('mazer/extra-component/toastify',[
            'title' => 'Toastify',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/rating', function () {
        return view('mazer/extra-component/rating',[
            'title' => 'Rating',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/layout/default', function () {
        return view('mazer/layout/default',[
            'title' => 'Layout Default',
            'menu' => 'layout',
            'submenu' => true,
        ]);
    });

    Route::get('/layout/one', function () {
        return view('mazer/layout/one',[
            'title' => 'Layout Vertical 1 Column',
            'menu' => 'layout',
            'submenu' => true,
        ]);
    });

    Route::get('/layout/vertical', function () {
        return view('mazer/layout/vertical',[
            'title' => 'Vertical Navbar',
            'menu' => 'layout',
            'submenu' => true,
        ]);
    });

    Route::get('/layout/rtl', function () {
        return view('mazer/layout/rtl',[
            'title' => 'RTL Dashboard',
            'menu' => 'layout',
            'submenu' => true,
        ]);
    });

    Route::get('/layout/horizontal', function () {
        return view('mazer/layout/horizontal',[
            'title' => 'Layout Horizontal',
            'menu' => 'layout',
            'submenu' => true,
        ]);
    });

    Route::get('/form/input', function () {
        return view('mazer/form/input',[
            'title' => 'Input',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/input-group', function () {
        return view('mazer/form/input-group',[
            'title' => 'Input Group',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/select', function () {
        return view('mazer/form/select',[
            'title' => 'Select',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/radio', function () {
        return view('mazer/form/radio',[
            'title' => 'Radio',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/checkbox', function () {
        return view('mazer/form/checkbox',[
            'title' => 'Checkbox',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/textarea', function () {
        return view('mazer/form/textarea',[
            'title' => 'Textarea',
            'menu' => 'form',
            'submenu' => true,
        ]);
    });

    Route::get('/form/layout', function () {
        return view('mazer/form/layout',[
            'title' => 'Form Layout',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/form/parsley', function () {
        return view('mazer/form/parsley',[
            'title' => 'Parsley',
            'menu' => 'form-validation',
            'submenu' => true,
        ]);
    });

    Route::get('/form/quill', function () {
        return view('mazer/form/quill',[
            'title' => 'Quill',
            'menu' => 'form-editor',
            'submenu' => true,
        ]);
    });

    Route::get('/form/ckeditor', function () {
        return view('mazer/form/ckeditor',[
            'title' => 'CKEditor',
            'menu' => 'form-editor',
            'submenu' => true,
        ]);
    });

    Route::get('/form/summernote', function () {
        return view('mazer/form/summernote',[
            'title' => 'Summernote',
            'menu' => 'form-editor',
            'submenu' => true,
        ]);
    });

    Route::get('/form/tinymce', function () {
        return view('mazer/form/tinymce',[
            'title' => 'TinyMCE',
            'menu' => 'form-editor',
            'submenu' => true,
        ]);
    });

    Route::get('/table', function () {
        return view('mazer/table/table',[
            'title' => 'Table',
            'menu' => 'table',
            'submenu' => true,
        ]);
    });

    Route::get('/table/datatable', function () {
        return view('mazer/table/datatable',[
            'title' => 'Datatable',
            'menu' => 'table',
            'submenu' => true,
        ]);
    });

    Route::get('/table/datatable-jquery', function () {
        return view('mazer/table/datatable-jquery',[
            'title' => 'Datatable jQuery',
            'menu' => 'table',
            'submenu' => true,
        ]);
    });

    Route::get('/widget/chatbox', function () {
        return view('mazer/widget/chatbox',[
            'title' => 'Chatbox',
            'menu' => 'widget',
            'submenu' => true,
        ]);
    });

    Route::get('/widget/pricing', function () {
        return view('mazer/widget/pricing',[
            'title' => 'Pricing',
            'menu' => 'widget',
            'submenu' => true,
        ]);
    });

    Route::get('/widget/todo-list', function () {
        return view('mazer/widget/todo-list',[
            'title' => 'Todo List',
            'menu' => 'widget',
            'submenu' => true,
        ]);
    });

    Route::get('/icon/bootstrap', function () {
        return view('mazer/icon/bootstrap',[
            'title' => 'Bootstrap Icons',
            'menu' => 'icon',
            'submenu' => true,
        ]);
    });

    Route::get('/icon/fontawesome', function () {
        return view('mazer/icon/fontawesome',[
            'title' => 'Fontawesome',
            'menu' => 'icon',
            'submenu' => true,
        ]);
    });

    Route::get('/icon/dripicons', function () {
        return view('mazer/icon/dripicons',[
            'title' => 'Dripicons',
            'menu' => 'icon',
            'submenu' => true,
        ]);
    });

    Route::get('/chart/chartjs', function () {
        return view('mazer/chart/chartjs',[
            'title' => 'ChartJS',
            'menu' => 'chart',
            'submenu' => true,
        ]);
    });

    Route::get('/chart/apexcharts', function () {
        return view('mazer/chart/apexcharts',[
            'title' => 'Apexcharts',
            'menu' => 'chart',
            'submenu' => true,
        ]);
    });

    Route::get('/form/upload', function () {
        return view('mazer/form/upload',[
            'title' => 'File Uploader',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/map/google-map', function () {
        return view('mazer/map/google-map',[
            'title' => 'Google Map',
            'menu' => 'map',
            'submenu' => true,
        ]);
    });

    Route::get('/map/js-vector-map', function () {
        return view('mazer/map/js-vector-map',[
            'title' => 'JS Vector Map',
            'menu' => 'map',
            'submenu' => true,
        ]);
    });

    Route::get('/map/leaflet', function () {
        return view('mazer/map/leaflet',[
            'title' => 'Leaflet Map',
            'menu' => 'map',
            'submenu' => true,
        ]);
    });

    Route::get('/map/openlayers', function () {
        return view('mazer/map/openlayers',[
            'title' => 'OpenLayers Map',
            'menu' => 'map',
            'submenu' => true,
        ]);
    });

    Route::get('/menu/multi-level', function () {
        return view('mazer/menu/multi-level',[
            'title' => 'Multi Level Menu',
            'menu' => 'menu',
            'submenu' => true,
            'submenu2' => true,
        ]);
    });

    Route::get('/page/email', function () {
        return view('mazer/page/email',[
            'title' => 'Email Application',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/page/chat', function () {
        return view('mazer/page/chat',[
            'title' => 'Chat Application',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/page/gallery', function () {
        return view('mazer/page/gallery',[
            'title' => 'Photo Gallery',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/page/checkout', function () {
        return view('mazer/page/checkout',[
            'title' => 'Checkout Page',
            'menu' => '',
            'submenu' => true,
        ]);
    });

    Route::get('/page/account-profile', function () {
        return view('mazer/page/account-profile',[
            'title' => 'Account Profile',
            'menu' => 'account',
            'submenu' => true,
        ]);
    });

    Route::get('/page/account-security', function () {
        return view('mazer/page/account-security',[
            'title' => 'Account Security',
            'menu' => 'account',
            'submenu' => true,
        ]);
    });

    Route::get('/auth/login', function () {
        return view('mazer/auth/login',[
            'title' => 'Login',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });

    Route::get('/auth/register', function () {
        return view('mazer/auth/register',[
            'title' => 'Register',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });

    Route::get('/auth/forgot', function () {
        return view('mazer/auth/forgot',[
            'title' => 'Forgot Password',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });

    Route::get('/error/403', function () {
        return view('mazer/error/403',[
            'title' => '403',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });

    Route::get('/error/404', function () {
        return view('mazer/error/404',[
            'title' => '404',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });

    Route::get('/error/500', function () {
        return view('mazer/error/500',[
            'title' => '500',
            'menu' => 'auth',
            'submenu' => true,
        ]);
    });
});
