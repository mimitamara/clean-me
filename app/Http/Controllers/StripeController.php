<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stripe;

class StripeController extends Controller
{
    public function stripe(Subscription $subscription)
    {
        if (auth()->user()->subscription()->exists()) {
            return redirect(route('client.profile'));
        }

        if ($subscription->price === 0) {
            UserSubscription::create([
                'user_id' => auth()->user()->id,
                'subscription_id' => $subscription->id,
                'active_till' => Carbon::now(),
            ]);

            return redirect(route('client.profile'));
        }

        return view('subscriptions.payment', [
            'subscription' => $subscription
        ]);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Subscription $subscription, Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100 * $subscription->price,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);

        UserSubscription::create([
            'user_id' => auth()->user()->id,
            'subscription_id' => $subscription->id,
            'active_till' => Carbon::now(),
        ]);

        session()->flash('success', 'Payment successful!');

        return redirect(route('client.profile'));
    }
}
