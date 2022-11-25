<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        return view('dashboard', [
            'intent' => $user->createSetupIntent(),
        ]);
    }

    public function singleCharge(Request $request)
    {
            return $request;
    }
}
