<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ProgramExerciseController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\WeightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes - GET|POST|PUT-PATCH|DELETE
|--------------------------------------------------------------------------
*/

/* PROGRAM ROUTES */
Route::resource('programs', ProgramsController::class);

/* EXERCISE ROUTES */
Route::resource('exercises', ExerciseController::class);
Route::get('/exercises/search/pluck', [ExerciseController::class, 'pluck']);
Route::get('/exercises/search/{title}', [ExerciseController::class, 'search']);

/* PROGRAMEXERCISES ROUTE - Met eager loading*/
Route::get('/progamexercises/search/{program}', [ProgramExerciseController::class, 'search']);

/* WEIGHT ROUTES */
Route::resource('weights', WeightController::class);
Route::get('/weights/search/{date}', [WeightController::class, 'search']);

/* ACTIVITY ROUTES */
Route::resource('activities', ActivityController::class);
Route::get('/activities/search/{searchType}/{searchValue}', [ActivityController::class, 'search']);