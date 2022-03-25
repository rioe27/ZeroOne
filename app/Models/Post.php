<?php

namespace App\Models;


class Post 
{
    private static $koding=[
        [
            "title"=>"Awal",
            "slug"=>"Awal",
            "author"=>"zero one",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam ea amet facilis nobis blanditiis consequuntur nihil quaerat illo similique molestiae nostrum rerum odio laborum repellendus, animi error placeat provident. Neque nam tenetur soluta, aut, ipsam porro fugiat laboriosam perferendis cum suscipit facere accusamus in rem ea dolor. 
            Voluptatibus, accusantium non."
        ],
        [
        "title"=>"Dua",
        "slug"=>"Dua",
        "author"=>"zero one",
        "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorem nulla tempore quis fuga omnis laudantium eveniet quasi laborum nesciunt."  
        ],
    ];


    public static function all()
    {
        return collect(self::$koding);
    }

    public static function find($slug)
    {
        $posts = static::all() ;
//        $post=[];
//        foreach($posts as $php){
//        if ($php["slug"]===$slug){
//            $post = $php;
//        }
//   }
   return $posts->firstWhere('slug',$slug);
    }
}