<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Models\Internship;

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
    return Inertia::render('Home', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('/userprofile', function () {
    return Inertia::render('Profile', [
        'canRegister' => Features::enabled(Features::registration()),
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

Route::get('/internships', function () {
    $internships = Internship::with('recruiter')
        ->orderBy('created_at', 'desc')
        ->get();

    return Inertia::render('interns/Internships', [
        'internships' => $internships
    ]);
})->name('internships');

require __DIR__.'/settings.php';
