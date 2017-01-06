<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//

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
    public function store(Request $request) 
    {
        

 if(Auth::check())
        {

        $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        ]);

        $post=new Post($request->all());
        $post->save();
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
    public function update($id,Request $request)
    {
         if(Auth::check())
        {

         $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        ]);
        //
        $postUpdate= new Post($request->all());
        $post=Post::find($id);
        $post->update($request->all());
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
