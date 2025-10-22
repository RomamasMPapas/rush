<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rush extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];

    /** @use HasFactory<\Database\Factories\RushFactory> */
    use HasFactory;
}
