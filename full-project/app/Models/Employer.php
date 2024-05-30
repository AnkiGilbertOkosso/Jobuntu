<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'company_name', 'logo', 'banner_image', 'about_us', 'organisation_type',
        'industry_type', 'team_size', 'year_of_establishment', 'company_website',
        'facebook_link', 'instagram_link', 'linkedin_link', 'twitter_link',
        'contact_number', 'contact_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
