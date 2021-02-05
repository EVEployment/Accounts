<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Homepage extends Controller
{
    public function mainPage() {
        return Inertia::render('Portal/Main');
    }

    public function staff() {
        return Inertia::render('Portal/Staff');
    }

    public function tos() {
        return Inertia::render('Portal/ToS');
    }
}
