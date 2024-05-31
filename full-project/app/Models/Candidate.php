<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID',
        'Resume',
        'Skills',
        'Experience',
        'Education',
        'nationality',
        'gender',
        'biography',
        'profile_picture',
        'marital_status',
        'date_of_birth',
        'social_link',
        'phone',
        'email',
        'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
