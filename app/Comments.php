<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    //relationship between comments and post
    public function add_comment_to_post(){
        return $this->belongsTo(Post::class);
    }
    public  function commentreply(){
        return $this->hasMany(Reply::class);
    }

   /* public static function reply_to_reply($reply)
    {
       self::commentreply()->create(['reply' => $reply]);



}*/
}
