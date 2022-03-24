<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $packageinfo = [
        'package_name',
        'package_price',
        'package_img',
        'package_desc'
    ];
}
