<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'name',
        'email',
        'phone',
        'website',
        'location',
        'about_company',
        'project_type',
        'budget',
        'timeline',
        'about_project',
    ];
}
