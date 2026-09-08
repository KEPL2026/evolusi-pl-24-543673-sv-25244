<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/shelves', function () {
    $shelves = [
        [
            'name' => 'Academic',
            'description' => 'Learning experiences from courses, assignments, and academic activities.',
        ],
        [
            'name' => 'Projects',
            'description' => 'Projects, experiments, and things built throughout the journey.',
        ],
        [
            'name' => 'Organization',
            'description' => 'Experiences, contributions, and lessons from organizational activities.',
        ],
        [
            'name' => 'Research',
            'description' => 'Research interests, exploration, and findings collected over time.',
        ],
    ];

    return view('shelves', compact('shelves'));
});
