<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
   protected $fillable = ['title','author','discription','status','url','date'];

   public static function getBlog(){
    return Blog::where('status',1)
                ->orderBy('created_at', 'DESC')
                ->orderBy('author','DESC')->get();
   }
}
