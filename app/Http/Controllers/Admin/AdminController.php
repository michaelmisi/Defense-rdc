<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ActualiteService;

class AdminController extends Controller
{
    public function dashboard(ActualiteService $actualiteService)
    {
        $actualites = $actualiteService->getActualites();
        return view('admin.dashboard', compact('actualites'));
    }
}
