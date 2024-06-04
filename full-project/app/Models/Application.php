<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'candidate_id',
        'application_date',
        'status',
        'cover_letter',
        'resume_path',
    ];

    public function job()
    {
        return $this->belongsTo(JobListing::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
