<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsToMany(Room::class, 'detail', 'reservation_id', 'room_id')
        ->withPivot('days','fee');
    }
}
