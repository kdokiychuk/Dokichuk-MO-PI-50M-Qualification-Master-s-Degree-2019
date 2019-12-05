<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/








Route::get('admin/role_worker/view', 'role_workerController@view');
Route::get('admin/role_worker/create', 'role_workerController@create');
Route::post('admin/role_worker/create', 'role_workerController@createRecord');
Route::delete('admin/role_worker/view/{role_worker}', 'role_workerController@delete');
Route::get('admin/role_worker/{role_worker}', 'role_workerController@edit');
Route::post('admin/role_worker/{role_worker}', 'role_workerController@editRecord');

Route::get('admin/status_tovar/view', 'status_tovarController@view');
Route::get('admin/status_tovar/create', 'status_tovarController@create');
Route::post('admin/status_tovar/create', 'status_tovarController@createRecord');
Route::delete('admin/status_tovar/view/{role_worker}', 'status_tovarController@delete');
Route::get('admin/status_tovar/{role_worker}', 'status_tovarController@edit');
Route::post('admin/status_tovar/{role_worker}', 'status_tovarController@editRecord');

Route::get('admin/tovar_type_dostavka/view', 'tovar_type_dostavkaController@view');
Route::get('admin/tovar_type_dostavka/create', 'tovar_type_dostavkaController@create');
Route::post('admin/tovar_type_dostavka/create', 'tovar_type_dostavkaController@createRecord');
Route::delete('admin/tovar_type_dostavka/view/{role_worker}', 'tovar_type_dostavkaController@delete');
Route::get('admin/tovar_type_dostavka/{role_worker}', 'tovar_type_dostavkaController@edit');
Route::post('admin/tovar_type_dostavka/{role_worker}', 'tovar_type_dostavkaController@editRecord');

Route::get('admin/tovar_type_oplata/view', 'tovar_type_oplataController@view');
Route::get('admin/tovar_type_oplata/create', 'tovar_type_oplataController@create');
Route::post('admin/tovar_type_oplata/create', 'tovar_type_oplataController@createRecord');
Route::delete('admin/tovar_type_oplata/view/{role_worker}', 'tovar_type_oplataController@delete');
Route::get('admin/tovar_type_oplata/{role_worker}', 'tovar_type_oplataController@edit');
Route::post('admin/tovar_type_oplata/{role_worker}', 'tovar_type_oplataController@editRecord');

Route::get('admin/tovar_type_tovar/view', 'type_tovarController@view');
Route::get('admin/tovar_type_tovar/create', 'type_tovarController@create');
Route::post('admin/tovar_type_tovar/create', 'type_tovarController@createRecord');
Route::delete('admin/tovar_type_tovar/view/{role_worker}', 'type_tovarController@delete');
Route::get('admin/tovar_type_tovar/{role_worker}', 'type_tovarController@edit');
Route::post('admin/tovar_type_tovar/{role_worker}', 'type_tovarController@editRecord');

Route::get('admin/viddilenya/view', 'viddilenyaController@view');
Route::post('admin/viddilenya/view/', 'viddilenyaController@search');
Route::get('admin/viddilenya/create', 'viddilenyaController@create');
Route::post('admin/viddilenya/create', 'viddilenyaController@createRecord');
Route::delete('admin/viddilenya/view/{role_worker}', 'viddilenyaController@delete');
Route::get('admin/viddilenya/{role_worker}', 'viddilenyaController@edit');
Route::post('admin/viddilenya/{role_worker}', 'viddilenyaController@editRecord');

Route::get('admin/news/view', 'newsController@view');
Route::post('admin/news/view', 'newsController@search');
Route::get('admin/news/create', 'newsController@create');
Route::post('admin/news/create', 'newsController@createRecord');
Route::delete('admin/news/view/{role_worker}', 'newsController@delete');
Route::get('admin/news/{role_worker}', 'newsController@edit');
Route::post('admin/news/{role_worker}', 'newsController@editRecord');

Route::get('admin/worker/view', 'workerController@view');
Route::post('admin/worker/view', 'workerController@search');
Route::get('admin/worker/create', 'workerController@create');
Route::post('admin/worker/create', 'workerController@createRecord');
Route::delete('admin/worker/view/{role_worker}', 'workerController@delete');
Route::get('admin/worker/{role_worker}', 'workerController@edit');
Route::post('admin/worker/{role_worker}', 'workerController@editRecord');

Route::get('admin/tovar/view', 'tovarController@view');
Route::post('admin/tovar/view', 'tovarController@search');
Route::get('admin/tovar/create', 'tovarController@create');
Route::post('admin/tovar/create', 'tovarController@createRecord');
Route::delete('admin/tovar/view/{role_worker}', 'tovarController@delete');
Route::get('admin/tovar/{role_worker}', 'tovarController@edit');
Route::post('admin/tovar/{role_worker}', 'tovarController@editRecord');

Route::get('admin/users/view', 'userController@view');
Route::post('admin/users/view', 'userController@search');
Route::get('admin/users/create', 'userController@create');
Route::post('admin/users/create', 'userController@createRecord');
Route::delete('admin/users/view/{role_worker}', 'userController@delete');
Route::get('admin/users/{role_worker}', 'userController@edit');
Route::post('admin/users/{role_worker}', 'userController@editRecord');





Route::get('courier/tovar/view', 'tovarCourierController@view');
Route::post('courier/tovar/view', 'tovarCourierController@search');
Route::get('courier/tovar/create', 'tovarCourierController@create');
Route::post('courier/tovar/create', 'tovarCourierController@createRecord');
Route::delete('courier/tovar/view/{role_worker}', 'tovarCourierController@delete');
Route::get('courier/tovar/{role_worker}', 'tovarCourierController@edit');
Route::post('courier/tovar/{role_worker}', 'tovarCourierController@editRecord');



Route::get('operator/tovar/view', 'tovarOperatorController@view');
Route::post('operator/tovar/view', 'tovarOperatorController@search');
Route::get('operator/tovar/create', 'tovarOperatorController@create');
Route::post('operator/tovar/create', 'tovarOperatorController@createRecord');
Route::delete('operator/tovar/view/{role_worker}', 'tovarOperatorController@delete');
Route::get('operator/tovar/{role_worker}', 'tovarOperatorController@edit');
Route::post('operator/tovar/{role_worker}', 'tovarOperatorController@editRecord');

Route::get('operator/users/view', 'userOperatorController@view');
Route::post('operator/users/view', 'userOperatorController@search');
Route::get('operator/users/create', 'userOperatorController@create');
Route::post('operator/users/create', 'userOperatorController@createRecord');
Route::delete('operator/users/view/{role_worker}', 'userOperatorController@delete');
Route::get('operator/users/{role_worker}', 'userOperatorController@edit');
Route::post('operator/users/{role_worker}', 'userOperatorController@editRecord');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {
    return view('admin.index',[
    ]);
});
Route::get('courier', function () {
    return view('courier.index',[
    ]);
});
Route::get('operator', function () {
    return view('operator.index',[
    ]);
});

Route::get('newsPage', 'mainPageController@viewNews');

Route::get('onlinePage', function () {
    return view('onlinePage',[
    ]);
});
Route::get('tarufPage', function () {
    return view('tarufPage',[
    ]);
});
Route::get('viddilenyaPage', function () {
    $masRoleWorker = App\viddilenyaModel::paginate(10);
    $coutFroPag =  App\viddilenyaModel::all()->count();
    return view('viddilenyaPage',[
        'masRoleWorker' => $masRoleWorker,
        'coutFroPag' => $coutFroPag
    ]);
});
Route::post('viddilenyaPage', 'viddilenyaController@searchVidPage');

Route::get('contactsPage', 'mainPageController@viewNewsContacts');


Route::post('/', 'mainPageController@seachPosulka');
Route::get('/', 'mainPageController@view');
Route::get('/{role_worker}', 'mainPageController@more');