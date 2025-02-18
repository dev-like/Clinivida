<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use App\Models\Eventos;
use App\Models\Convenios;
use App\Models\QuemSomos;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * @return Application|Factory|View
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.main');
    }
}
