<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $date = [
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
