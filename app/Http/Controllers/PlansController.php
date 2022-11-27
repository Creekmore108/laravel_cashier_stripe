<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Plan;
use Laravel\Cashier\Subscription;
use Exception;
use App\Models\Plan as ModelsPlan;

class PlansController extends Controller
{
    public function index()
    {
        return view('addplan');
    }

    public function storePlan(Request $request)
    {

        //  dd($request);
        // \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            $amount = ($request->amount * 100);
                $plan = Plan::create([
                    'amount'            =>  $amount,
                    'currency'          =>  $request->currency,
                    'interval'          =>  $request->billing_period,
                    'interval_count'    =>  $request->interval_count,
                    'product'   =>  [
                        'name'  => $request->name 
                    ]
                ]);

                ModelsPlan::create([
                    'plan_id'           => $plan->id,
                    'name'              => $request->name,
                    'price'             => $plan->amount,
                    'billing_method'    => $plan->interval,
                    'currency'          => $plan->currency,
                    'interval_count'    => $plan->interval_count
                ]);
        } catch(Exception $ex) {
            dd($ex->getMessage());
        }

        return "success";
    }
}
