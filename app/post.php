<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{


 	public function comments()

 		{

 			return $this->hasMany(Comment::class);

 		}
 	public function addComment($body)
 	
 	{

 			$this->Comments()->create(compact('body'));
 			// Comment::create([

 			// 	'body' => $body,
 			// 	'post_id' => $this->id

 			// ]);

 	}

}
 

