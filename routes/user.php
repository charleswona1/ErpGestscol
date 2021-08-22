<?php 

	use Illuminate\Support\Facades\Route;
	use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

	/** user login for configuration */
		Route::get('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin1'])->name('user.login');
					
		Route::post('/configuration', [App\Http\Controllers\ConfigurationController::class, 'userLogin'])->name('user.authentification');

		Route::get('/configuration/home', [App\Http\Controllers\ConfigurationController::class, 'configurationHome'])->name('user.home');

		Route::post('/user/register', [App\Http\Controllers\ConfigurationController::class, 'userRegister'])->name('user.register');

		Route::post('/user/logout', [App\Http\Controllers\ConfigurationController::class, 'userLogout'])->name('user.logout');
	/** */