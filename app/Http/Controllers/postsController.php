<?php

namespace App\Http\Controllers;

//use DB;
//use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

use App\Post;
class postsController extends Controller
{
    public function show($slug)
    {
       // $post =\DB::table('posts')->where('slug',$slug)->first();
        //if (!$post){abort(404);}
$f= Post::where('slug',$slug)->firstOrFail()->body;
$ff= Post::where('slug',$slug)->first();
//var_dump($ff);
print_r($ff);
        return view('wawposts', ['pp' => $f]);
    }
}
