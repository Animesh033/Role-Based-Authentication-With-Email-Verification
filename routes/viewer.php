<?php

Route::middleware(['verified', 'role:viewer'])->group(function () {
	Route::namespace('Viewer')->group(function () {
	    // Controllers Within The "App\Http\Controllers\Viewer" Namespace
    	Route::resource('viewer', 'ViewerController');
	});
});
