<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function post(){
        return $this->belongsTo(Post::class, 'post_id','id');
    }
}
