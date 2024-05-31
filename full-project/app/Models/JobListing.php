<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = [
        'user_id',
        'job_title',
        'tags',
        'job_role',
        'min_salary',
        'max_salary',
        'salary_type',
        'education',
        'experience',
        'job_type',
        'vacancies',
        'expiration_date',
        'job_level',
        'country',
        'city',
        'is_remote',
        'job_description',
        'job_benefits',
    ];

    protected $casts = [
        'tags' => 'array',
        'job_benefits' => 'array',
        'is_remote' => 'boolean',
        'expiration_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
