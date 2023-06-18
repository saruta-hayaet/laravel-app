<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Feature;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function feature()
    {
        return $this->hasMany(Feature::class);
    }
}
