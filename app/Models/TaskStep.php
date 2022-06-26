<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskStep extends Model
{
    use HasFactory;

    protected $with = ['step'];

    protected $guarded = [];

    public function step(): BelongsTo
    {
        return $this->belongsTo(Step::class);
    }

    public function getOrder()
    {
        return $this->step->order;
    }

    public function getName()
    {
        return $this->step->name;
    }

    public function getStatusBadge(): string
    {
        if ($this->status === 'done') {
            return 'btn-success';
        }

        if ($this->status === 'in-progress') {
            return 'btn-warning text-dark';
        }

        return 'btn-primary';
    }
}
