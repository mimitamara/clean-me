<?php

namespace App\Http\Controllers;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('pages.subscriptions', [
            'subscriptions' => Subscription::all(),
        ]);
    }
}
