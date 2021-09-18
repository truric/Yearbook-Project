<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('', 'OfficeController@login')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('verifyUserRole', 'OfficeController@verifyUserRole');
    Route::get('loading', 'OfficeController@loading');

    Route::get('logout', 'OfficeController@logout');
});




Route::middleware(['auth', 'professor'])->group(function () {

    Route::prefix('backOffice')->group(function () {
        Route::get('', 'OfficeController@introBackOffice');

        Route::get('/sendemail', 'EmailController@index');
        Route::post('/sendemail/send', 'EmailController@send');



        Route::prefix('event')->group(function () {
            Route::get('', 'EventController@create');

            Route::get('{event}/edit', 'EventController@edit');
            Route::put('{event}', 'EventController@update');
            Route::delete('{event}', 'EventController@destroy');
            Route::get('list', 'EventController@index');
        });



        Route::middleware('role.2')->group(function () {
            Route::prefix('users')->group(function () {


                Route::prefix('professor')->group(function () {
                    Route::get('index', 'ProfessorController@index');
                    Route::get('', 'ProfessorController@create');
                    Route::post('', 'ProfessorController@store');
                    Route::get('{professor}/edit', 'ProfessorController@edit');
                    Route::put('{professor}', 'ProfessorController@update');
                    Route::delete('{professor}', 'ProfessorController@destroy');
                    Route::get('export', 'ProfessorController@export');
                    Route::post('import', 'ProfessorController@import');
                });

                Route::prefix('student')->group(function () {
                    Route::get('index', 'StudentController@index');
                    Route::get('', 'StudentController@create');
                    Route::post('', 'StudentController@store');
                    Route::get('{student}/edit', 'StudentController@edit');
                    Route::put('{student}', 'StudentController@update');
                    Route::delete('{student}', 'StudentController@destroy');
                    Route::get('export', 'StudentController@export');
                    Route::post('import', 'StudentController@import');
                });
            });
        });

        Route::middleware('role.2')->group(function () {
            Route::prefix('atec')->group(function () {
                Route::get('', 'AreaController@index');

                Route::prefix('area')->group(function () {
                    Route::get('', 'AreaController@create');
                    Route::post('', 'AreaController@store');
                    Route::get('{area}/edit', 'AreaController@edit');
                    Route::put('{area}', 'AreaController@update');
                    Route::delete('{area}', 'AreaController@destroy');
                });

                Route::prefix('degree')->group(function () {
                    Route::get('', 'DegreeController@create');
                    Route::post('', 'DegreeController@store');
                    Route::get('{degree}/edit', 'DegreeController@edit');
                    Route::put('{degree}', 'DegreeController@update');
                    Route::delete('{degree}', 'DegreeController@destroy');
                });
            });
        });


            Route::prefix('group')->group(function () {

                Route::middleware('role.2')->group(function () {
                    Route::get('', 'GroupController@create');
                    Route::post('', 'GroupController@store');
                });

                Route::middleware('role.3')->group(function () {
                    Route::get('{group}/edit', 'GroupController@edit');
                    Route::put('{group}', 'GroupController@update');
                    Route::delete('{group}', 'GroupController@destroy');
                });

            });
//        });


    });
});


Route::middleware(['auth', 'all.users'])->group(function () {

    Route::get('group/{group}', 'GroupController@show');
    Route::get('group/{group}/gallery', 'GroupController@gallery');
    Route::get('group/{group}/events', 'GroupController@events');
    Route::put('group/{group}/slogan', 'GroupController@slogan');
    Route::get('group/{group}/atec', 'GroupController@institution');

    Route::get('group/{group}/gallery/photos', 'GroupController@photos');


    Route::post('commentUserEvent', 'CommentUserEventController@store');
    Route::put('commentUserEvent/{commentUserEvent}', 'CommentUserEventController@update');
    Route::delete('commentUserEvent/{commentUserEvent}', 'CommentUserEventController@destroy');

    Route::post('commentUserUser', 'CommentUserUserController@store');
    Route::put('commentUserUser/{commentUserUser}', 'CommentUserUserController@update');
    Route::delete('commentUserUser/{commentUserUser}', 'CommentUserUserController@destroy');


    Route::get('event/{event}', 'EventController@show');
    Route::get('event/{event}/photos', 'EventController@photos');


    Route::post('photo', 'PhotoController@store');
    Route::get('photo/{photo}', 'PhotoController@show');
    Route::delete('photo/{photo}', 'PhotoController@destroy');
    Route::post('photo/{photo}/usersAdd', 'PhotoController@usersAdd');
    Route::post('photo/{photo}/usersRemove', 'PhotoController@usersRemove');



    Route::get('user/{user}', 'UserController@show');
    Route::get('user/{user}/photos', 'UserController@photos');
    Route::get('user/{user}/edit', 'UserController@edit');
    Route::put('user/{user}', 'UserController@update');
    Route::post('backOffice/event', 'EventController@store');


    Route::get('county/{var}/api', 'CountyController@getBy');
    Route::get('parish/{var}/api', 'ParishController@getBy');


});


