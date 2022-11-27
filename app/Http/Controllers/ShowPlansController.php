<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class ShowPlansController extends Controller
{
    public function index(){
        $bronze = Plan::where('name', 'Bronze Plan')->first();
        $silver = Plan::where('name', 'Silver Plan')->first();
        $gold = Plan::where('name', 'Gold Plan')->first();

        return view('showplans', compact('bronze', 'silver', 'gold'));

    }
}
