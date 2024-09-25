<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{

    public function index()
    {
        return view('index');
    }
    
}
