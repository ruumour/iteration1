<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'description' => 'required', 
    		'suburb' => 'required',
    		'type' => 'required'
    	]);

    	Post::create(request(['title', 'description', 'suburb', 'type']));

    	return redirect('/request');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $posts = Post::where('title', 'LIKE', '%'.$keyword.'%')->get();
        return view('Requests.request',compact('posts'));
    }

    public function show(Post $post)
    {
        // $post = Post::find($id);
        return view('Requests.show',compact('post'));
    }

    public function index()
    {
        $posts = Post::latest();
        if($type = request('type')) 
        {
            $posts->where('type',$type);
        }
        if($Suburb = request('Suburb'))
        {
            $posts->where('Suburb',$Suburb);
        }
        $posts = $posts->get();
        return view('Requests.request',compact('posts'));
    }


}
