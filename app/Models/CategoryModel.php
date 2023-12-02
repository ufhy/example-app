<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'active'];

    protected $casts = [
      'active' => 'boolean'
    ];
}
