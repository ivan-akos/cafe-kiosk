<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class KioskController extends Controller
{
    public function index() : Response
    {
        return Inertia::render('Kiosk/Index');
    }
}
