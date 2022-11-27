<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Exception;
use Laravel\Cashier\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription');
    }

    public function checkout($planId){
        $plan = Plan::where('plan_id', $planId)->first();
        // dd($plan);
        if(! $plan){
            return back()->withErrors([
                'message' => '!!! Unable to locate plan in database !!!'
            ]);
        }

        return view('subscription', [
            'plan'  => $plan,
            'intent' => auth()->user()->createSetupIntent(),
        ]);
    }

    public function process(Request $request)
    {
        $user = auth()->user();
        $user->createOrGetStripeCustomer();
        $paymentMethod = null;
        $paymentMethod = $request->payment_method;
        if($paymentMethod != null){
            $paymentMethod = $user->addPaymentMethod($paymentMethod);
        }
        $plan = $request->plan_id;

        // dd($request);

        try {
            $user->newSubscription(
                'default', $plan
            )->create( $paymentMethod != null ? $paymentMethod->id: '');
        }
        catch(Exception $ex){
            return back()->withErrors([
                'error' => 'Unable to create subscription due to this issue '. $ex->getMessage()
            ]);
        }

        $request->session()->flash('alert-success', 'You are subscribed to this plan');
        return to_route('plans.checkout', $plan);
    }
    
}
