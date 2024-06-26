<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable = [
        'name',
        'status',
        'image',
        'subcategory_id',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
