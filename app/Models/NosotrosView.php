<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NosotrosView extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1section', 
        'description1section', 
        'title2section',
        'description2section',
        'description3section',
        'description4section',
        'title5section',
        'description5section',
        'footer5section',
    ];
}
