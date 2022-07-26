<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $checkouts= Checkout::with('camp')->get();
        return view('admin.dashboard',[
            'checkouts'=>$checkouts
        ]);
    }
}
