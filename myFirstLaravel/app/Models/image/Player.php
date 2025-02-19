<?php

namespace App\Models\image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'age'];

}
