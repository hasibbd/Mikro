<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterUser extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_name','user_id','user','pass','user_status',
    ];
}
