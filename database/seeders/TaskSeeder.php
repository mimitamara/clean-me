<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public const TASKS = [
        [
            'user_id' => 2,
            'category_id' => 3,
            'user_comment' => 'Please wash my items asap.',
            'status' => 'waiting'
        ]
    ];

    public function run(): void
    {
        foreach (self::TASKS as $task) {
            Task::create($task);
        }
    }
}
