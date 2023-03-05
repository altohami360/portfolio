<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];  
    
    // $fillabe = [
    //     'user_id',
    //     'degree',
    //     'school',
    //     'collage',
    //     'department',
    //     'start_at',
    //     'end_at',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
