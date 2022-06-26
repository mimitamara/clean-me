<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Step;
use App\Models\Subscription;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public const CATEGORIES = [
        [
            'name' => 'Ironing',
            'image' => 'uploads/ironing.png',
            'steps' => [
                [
                    'order' => 1,
                    'name' => 'Pick up items',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 2,
                    'name' => 'Iron items',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 3,
                    'name' => 'Fold items',
                    'instructions' => 'Follow the following steps',
                ],
            ],
        ],
        [
            'name' => 'Bathroom cleanup',
            'image' => 'uploads/cleaning.png',
            'steps' => [
                [
                    'order' => 1,
                    'name' => 'Clean bath',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 2,
                    'name' => 'Clean sink',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 3,
                    'name' => 'Clean floor',
                    'instructions' => 'Follow the following steps',
                ],
            ],
        ],
        [
            'name' => 'Washing',
            'image' => 'uploads/washing.png',
            'steps' => [
                [
                    'order' => 1,
                    'name' => 'Sort Clothes',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 2,
                    'name' => 'Load Machine',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 3,
                    'name' => 'Unload Machine',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 4,
                    'name' => 'Dry Clothes',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 5,
                    'name' =>  'Fold Clothes',
                    'instructions' => 'Follow the following steps',
                ],
                [
                    'order' => 5,
                    'name' =>  'Pack Clothes',
                    'instructions' => 'Follow the following steps',
                ]
            ]
        ]
    ];

    public function run(): void
    {
        foreach (self::CATEGORIES as $category) {
            if (!Category::query()->where('name', $category['name'])->exists()) {
                $categoryObj = Category::create([
                    'name' => $category['name'],
                    'image' => $category['image'],
                ]);

                foreach ($category['steps'] as $step) {
                    Step::create(array_merge(['category_id' => $categoryObj->id], $step));
                }
            }
        }
    }
}
