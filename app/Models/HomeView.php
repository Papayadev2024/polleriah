<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeView extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1section', 
        'description1section', 
        'title2section',
        'title3section',
        'title4section',
        'description4section',
        'footer4section',
        'title5section',
        'description5section',
    ];
}
