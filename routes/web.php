<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Models\Internship;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::post('/auth/check', [AuthController::class, 'checkUser'])->name('auth.check');

Route::get('interns/registration', function () {
    return Inertia::render('interns/InternsRegistration', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('internregistration');

Route::get('/login', function () {
    return Inertia::render('auth/Login', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('login');

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/userprofile', function () {
    $user = Auth::user();

    $profile = null;
    if ($user) {
        $profile = \App\Models\Intern::with(['education', 'experiences', 'skills', 'attachments'])
            ->where('user_id', $user->id)
            ->first();
    }

    return Inertia::render('Profile', [
        'user' => $user,
        'profile' => $profile,
    ]);
})->name('profile');

Route::get('/messages', function () {
    return Inertia::render('Messages', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('messages');

Route::get('/applications', function () {
    return Inertia::render('interns/Applications', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('applications');

Route::get('/recruiter/dashboard', function () {
    return Inertia::render('recruiters/Dashboard', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('dashboard');

Route::get('/recruiter/applications', function () {
    return Inertia::render('recruiters/Applications', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('applications');

Route::get('/recruiter/applicants', function () {
    return Inertia::render('recruiters/Applicants', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('applicants');

Route::get('/recruiter/createjob', function () {
    return Inertia::render('recruiters/CreateJob', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('createjob');

Route::get('/internships', function () {
    $internships = Internship::with('recruiter')
        ->orderBy('created_at', 'desc')
        ->get();

    return Inertia::render('interns/Internships', [
        'internships' => $internships
    ]);
})->name('internships');

Route::get('/recruiter/joblisting', function () {
    $joblisting = Internship::with('recruiter')
        ->orderBy('created_at', 'desc')
        ->paginate(6);

    return Inertia::render('recruiters/JobListing', [
        'joblisting' => $joblisting
    ]);
})->name('joblisting');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate(); 
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

require __DIR__.'/settings.php';
