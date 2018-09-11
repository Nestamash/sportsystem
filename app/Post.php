<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relationshipbetween posts and comments post can have many comments
    public function post_comments(){
        return $this->hasMany(Comments::class);
    }

}
