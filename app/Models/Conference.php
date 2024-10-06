<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
    ];

    // Define the relationship with Participant model
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
