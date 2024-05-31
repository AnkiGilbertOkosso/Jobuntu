<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'banner_image',
        'company_name',
        'about_us',
        'organization_type',
        'industry_types',
        'team_size',
        'year_of_establishment',
        'company_website',
        'social_links',
        'map_location',
        'phone',
        'email',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'social_links' => 'array',
        'year_of_establishment' => 'date',
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
