<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public const SUBSCRIPTIONS = [
        [
            'name' => 'Free',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
            'price' => 0,
        ],
        [
            'name' => 'Basic',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
            'price' => 99,
        ],
        [
            'name' => 'Premium',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
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
