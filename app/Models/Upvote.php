<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    use HasFactory;
    protected $fillable=['upvote','feature_id','user_id'];
    public function feature()
    {

    return $this->belongsTo(Feature::class) ;
    }
}
