<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['reply'];
    public function replies()
    {
        $this->belongsTo(Comments::class);
    }
}
