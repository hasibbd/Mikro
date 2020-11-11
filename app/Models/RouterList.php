<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterList extends Model
{
    use HasFactory;
    protected $fillable =[
        'r_name','user_id','r_id','i_name','ip','user','pass',
    ];
}
