<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return[
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
               'title'=>'Judul Artikel 1',
               'author'=> 'Hersya yudina', '|  11 July 2024',
               'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, fuga. Repudiandae architecto eos debitis, magni quasi, ut vel fugiat quo esse temporibus molestiae, accusantium omnis? Dolorem, quis voluptas? Praesentium, est.'
            ],
            [
                'id'=> 2,
                'slug' => 'judul-artikel-2',
                'title'=>'Judul Artikel 2',
                'author'=> 'Alexander Robert', '|  11 July 2024',
                'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt nihil asperiores ratione, iure, cum quisquam vero consequuntur accusamus officiis tempore suscipit mollitia ipsa sint aliquam corrupti ea vitae! Eius.'
             ],
            ];
    }

    public static function find($slug): array
    {
      $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
     {
         if (!$post) {
            abort(404);
         }
        

        return $post;
    }
   }
}