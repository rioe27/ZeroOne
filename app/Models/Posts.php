<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
   // protected $fillable = ['title','excerpt','body'];
    protected $guarded=['id'];
    //protected $table="posts";
   // protected $primaryKey="id";
   // protected $fillable = ['title','excerpt','body'];

   public function category(){
       return $this->belongsTo(category::class);
   }

   public function postedBy()
      {
         return $this->belongsTo('App\User');
      }
      protected $table = 'posts';
      protected $fillable = ['title', 'excrept', 'body'];

    
}
