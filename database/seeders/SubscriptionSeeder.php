<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public const SUBSCRIPTIONS = [
        [
            'name' => 'Free',
            'description' => 'Dieses Abonnement ist gratis, und hilft dir limitiert bei Tasks.',
            'price' => 0,
        ],
        [
            'name' => 'Basic',
            'description' => 'Hier kannst du dir schon unlimitiert hilfe holen inklusive tipps und tricks.',
            'price' => 99,
        ],
        [
            'name' => 'Premium',
            'description' => 'Bei diesem Abonnement kannst du dir alles aus dieser Applikation raus holen. Unlimitierte hilfe und vieles mehr.',
            'price' => 199,
        ]
    ];

    public function run(): void
    {
        foreach (self::SUBSCRIPTIONS as $subscription) {
            if (!Subscription::query()->where('name', $subscription['name'])->exists()) {
                Subscription::create($subscription);
            }
        }
    }
}
