<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'people',
        'check_in',
        'check_out',
    ];

    public function guest() {
        return $this->belongsTo(Guest::class);
    }
}
