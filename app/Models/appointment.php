<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'age',
        'date',
        'time',
        'user_id', //foreign key from users table
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
