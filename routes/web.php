<?php

use App\Http\Controllers\Taskcontroller;
use Illuminate\Support\Facades\Route;



 Route::get('/', [Taskcontroller::class ,'index']);
 Route::post('/store',[Taskcontroller::class,'store']); 
 Route::get('delete/{id}',[Taskcontroller::class,'delete']);
 Route::post('update/{id}',[Taskcontroller::class,'update']);     