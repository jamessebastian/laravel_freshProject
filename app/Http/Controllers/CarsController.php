<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;
class CarsController extends Controller
{
    public function show($slug)
    {
        // $post =\DB::table('posts')->where('slug',$slug)->first();
        //if (!$post){abort(404);}

        return view('wawposts', ['pp' => cars::where('id',$slug)->firstOrFail()->car_name]);
    }
}
