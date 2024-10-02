<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'room_number',
    ];

    public function room_type() {
        return $this->belongsTo(Room_type::class);
    }

    public function reservation()
    {
        return $this->belongsToMany(reservation::class, 'detail', 'room_id', 'reservation_id');
        // ->withPivot('days', 'price');
    }
}
