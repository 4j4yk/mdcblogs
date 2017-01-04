<?php

namespace App\Http\Controllers;

use Request;

use App\Post;
use Auth;

class PostController extends Controller
{
    
    public function index()
    {
    
        if(Auth::check())
        {

            $posts=Post::all();
            return view('posts.index',compact('posts'));
        }
        else
        {
            return view('welcome');
        }

    }

    public function show($id)
    {
        

  if(Auth::check())
        {

           $post=Post::find($id);
        return view('posts.show',compact('post'));
    
        }
        else
        {
            return view('welcome');
        }


    }


    public function create()
    {
        

        if(Auth::check())
        {

             return view('posts.create');
        }
        else
        {
            return view('welcome');
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        

 if(Auth::check())
        {

            $post=Request::all();
            Post::create($post);
            return redirect('posts');

        }
        else
        {
            return view('welcome');
        }

    }

    public function edit($id)
    {
        


        if(Auth::check())
        {

             $post=Post::find($id);
        return view('posts.edit',compact('post'));
        }
        else
        {
            return view('welcome');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
         if(Auth::check())
        {

        //
        $postUpdate=Request::all();
        $post=Post::find($id);
        $post->update($postUpdate);
        return redirect('posts');
        }
        else
        {
            return view('welcome');
        }
    }

    public function destroy($id)
    {
      
          if(Auth::check())
        {

        //
          Post::find($id)->delete();
        return redirect('posts');
        }
        else
        {
            return view('welcome');
        }
    }


}
