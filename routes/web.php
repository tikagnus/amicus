<?php

Auth::routes();


Route::group([
    'middleware' => [
        'auth',
        'role:admin'
    ],
    'namespace' => 'Web'
], function () {

    //users routes


    Route::get('/home',function(){
        return redirect('/');
    });

    Route::get('/profile', [
        'as' => 'users.my-profile',
        'uses' => 'UsersController@profile',
        'middleware' => [
            'permission:view-profile'
        ]
    ]);

    Route::get('/profile/{user}', [
        'as' => 'users.profile',
        'uses' => 'UsersController@profile',
        'middleware' => [
            'permission:view-profile'
        ]
    ]);

    Route::put('/profile/update/{user}', [
        'as' => 'users.profile.update',
        'uses' => 'UsersController@update',
        'middleware' => [
            'permission:edit-profiles'
        ]
    ]);


    //event
    Route::get('/events/{event}', [
        'as' => 'event.show',
        'uses' => 'EventsController@show',
        'middleware' => [
            'permission:view-event'
        ]
    ]);

    Route::post('/events/modal', [
        'as' => 'event.modal',
        'uses' => 'EventsController@modalEvent',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::put('/events/{event}/update',[
        'as' => 'event.update',
        'uses' => 'EventsController@update',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::put('/events/save',[
        'as' => 'event.save',
        'uses' => 'EventsController@save',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);


    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@home',
        'permission' => [
            'permission:view-home'
        ]
    ]);


    //todo controlelr
    Route::get('/subsidiaries/{subsidiary}', [
        'as' => 'subsidiary.show',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:view-subsidiary'
        ]
    ]);    //todo controlelr
    Route::post('/subsidiaries/create', [
        'as' => 'subsidiary.create',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:edit-subsidiaries'
        ]
    ]);

    //todo controlelr
    Route::get('/posts/{post}', [
        'as' => 'posts.show',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:view-posts'
        ]
    ]);    //todo controlelr
    Route::post('/posts/create', [
        'as' => 'posts.create',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:edit-posts'
        ]
    ]);

    //todo controlelr
    Route::get('/resources/{resource}', [
        'as' => 'resources.show',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:view-resource'
        ]
    ]);


    Route::get('/attend/modal/{form}',[
        'as' => 'attend.modal',
        'uses' => 'AttendController@modal',
        'middleware' => [
            'permission:attend'
        ]
    ]);



    //todo controlelr
    Route::post('/resources/create', [
        'as' => 'resources.create',
//        'uses' => 'SubsidiariesController@show',
        'middleware' => [
            'permission:edit-resources'
        ]
    ]);

    Route::post('/events/{event}/form/modal',[
        'as' => 'events.form.modal',
        'uses' => 'FormController@modalForm',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/{event}/form/{form?}/options/modal',[
        'as' => 'events.form.options.modal',
        'uses' => 'FormController@modalOptions',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/{event}/form/create', [
        'as' => 'events.form.create',
        'uses' => 'FormController@save',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::put('/events/form/{form}/update', [
        'as' => 'events.form.update',
        'uses' => 'FormController@update'
    ]);

    Route::post('/events/form/{form}/option/create', [
        'as' => 'events.form.option.create',
        'uses' => 'FormController@createOption'

    ]);

    Route::put('/events/form/option/update/{option}', [
        'as' => 'events.form.option.update',
        'uses' => 'FormController@updateOption',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/form/option/modal',[
        'as' => 'events.form.option.modal',
        'uses' => 'FormController@modalOption',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/form/option/{option}/value/create', [
        'as' => 'events.form.option.value.create',
        'uses' => 'FormController@createValue'
    ]);

    Route::put('/events/form/option/value/update/{value}', [
        'as' => 'events.form.option.value.update',
        'uses' => 'FormController@updateValue',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/form/option/value/modal',[
        'as' => 'events.form.option.value.modal',
        'uses' => 'FormController@modalOptionValue',
        'middleware' => [
            'permission:edit-events'
        ]
    ]);

    Route::post('/events/form/{form}/attend',[
        'as' => 'events.form.attend',
        'uses' => 'AttendController@attend'
    ]);


});

Route::get('/test', function () {

    echo route('event.show',1);
});

