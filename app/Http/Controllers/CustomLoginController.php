<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Filament\Http\Controllers\Auth\LoginController as FilamentLoginController;

class CustomLoginController extends Controller
{
    public function __invoke()
    {
        return $this->showLoginForm(); // Tampilkan form login
    }
}
