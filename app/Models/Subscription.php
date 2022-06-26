<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function getPrice(): string
    {
        $price = $this->price > 0 ? $this->price / 100 : 0;

        return '€' . $price;
    }
}
