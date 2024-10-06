<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'conference_id',
    ];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
