<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        //$posts = Post::get();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      // هي أول طريقة : طريقة ال save
        /*$post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();*/

        //هي تاني طريقة : طريقة ال create

        Post::create([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        /*Post::create(
            $request->all()
        );*/
        return response('---تمت العملية بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //$post= Post::findOrFail($id);
        $post = Post::where('id',$id)->first();
        return view('posts.edit',compact('post'));
        //,compact('post')
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = Post::findOrFail($id);
        
        //هي أول طريقة
        /*$post->title=$request->title;
        $post->body=$request->body;
        $post->save();*/

        //هي تاني طريقة
        $post->update([
        'title'=>$request->title,
        'body'=>$request->body    
        ]);

        //هي طريقة ثالثة
        //$post->update($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
