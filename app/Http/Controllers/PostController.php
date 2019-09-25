<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index(){

    }

    public function create()
    {
        return view("post.creat_post");
    }

    public function store(Request $request)
    {
        $posts = $request->all();

        $posts['user_id'] = Auth::id();

        Post::create($posts);

        return redirect('/home')->with('status', 'New support ticket has been created! Wait sometime to get resolved');
    }

    public function edit($id)
    {
        $posts = Post::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return view('user.edit', compact('posts', 'id'));
    }

    public function update(Request $request, $id)
    {
        $posts = new Posts();
        $data = $this->validate($request, [
            'description'=>'required',
            'name'=> 'required'
        ]);
        $data['id'] = $id;
        $posts->updatePosts($data);

        return redirect('/home')->with('success', 'New support Posts has been updated!!');
    }
}
