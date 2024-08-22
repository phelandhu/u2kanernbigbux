<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyController;


Route::group(['prefix' => '/questions', 'as' => 'questions.'], function() {
    Route::get('/', [QuestionController::class, 'list']);
    Route::get('/{id}', [QuestionController::class, 'get'])
    ->where('id', '[1-9][0-9]*');
//    Route::get('/', function () { return "Hi there!"; });
    Route::get('/hi', function () { return "Hi there!"; });
});

Route::group(['prefix' => '/surveys', 'as' => 'surveys.'], function() {
    Route::get('/', [SurveyController::class, 'list']);
    Route::get('/{id}', [SurveyController::class, 'get'])
    ->where('id', '[1-9][0-9]*');
});

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
