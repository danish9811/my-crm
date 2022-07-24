<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = 'leads';     // if we are not following laravel conventions
    protected $guarded = ['id'];    // mass assignment except 'id'
    protected $primaryKey = 'id';   // if we explicityly define the primary key, and we don't follow the convensions



}
