<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timecard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function timecards()
    {
       return $this -> hasMany('App\Models\User', 'id','user_id');
    }
}
