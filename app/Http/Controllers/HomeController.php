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

            $amount = $request->amount;
            $amount = $amount * 100;
            $paymentMethod = $request->payment_method;

            $user = auth()->user();
        
            $user->createOrGetStripeCustomer();
            
            $paymentMethod = $user->addPaymentMethod($paymentMethod);
            
            // if ($paymentMethod != null) {
            //     $paymentMethod = $user->addPaymentMethod($paymentMethod);
            // }

            $user->charge($amount, $paymentMethod->id);

            return to_route('dashboard');
    }
}
