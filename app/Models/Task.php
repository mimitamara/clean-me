<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $with = ['steps'];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(TaskStep::class);
    }

    public function getStatus()
    {
        try {
            $stepsCount = $this->steps()->count();
            $doneSteps = $this->steps()->where('status', 'done')->count();
            $finished = $stepsCount === $doneSteps ? 'finished' : 'waiting';
        } catch (\Exception $exception) {
            return 'waiting';
        }

        return $finished;
    }
}
