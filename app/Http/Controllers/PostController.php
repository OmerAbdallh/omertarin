<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Auth ;
use Illuminate\Support\Str;

class PostController extends Controller
{
   //Auta
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Index
    public function index()
    {
        //posts=Post::all();
        $posts=Post::latest()->paginate(100);
        return view('posts.index' )->with('posts',$posts);
    }

    //Trashed
    public function postTrashed()
    {
        $posts=Post::onlyTrashed()->get();
        return view('posts.trashed' )->with('posts',$posts);
    }

   
    //Add
    public function create()
    {
        return view('posts.create');
    }

  
    //Store
    public function store(Request $request)
    {
       
        $this->validate( $request ,[
            'title'=>'required',
            'content'=>'required',
            'photo'=>'required|image'

        ]);
        $photo=$request->photo;
        $newPhoto=time().$photo->getClientOriginalName();
        $photo->move('upload/post/',$newPhoto);

        $post=Post::create([
            'user_id'=> Auth::id() ,
            'title'=> $request->title,
            'content'=>$request->content , 
            'photo'=>'upload/post/'.$newPhoto  ,
            'slug'=>Str::slug($request->title)
        ]);
        return redirect()->route('posts')->with('success' , 'success added succseefuly');
    }


    //Show
    public function show($slug)
    {
        $post=Post::where('slug', $slug)->first();
        return view('posts.show')->with('post',$post);
    }


    //Edit
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit')->with('post',$post);
    }



    //Update
    public function update(Request $request,  $id)
    {
        $post=Post::find($id);

        $this->validate( $request ,[
            'title'=>'required',
            'content'=>'required',
            'photo'=>'required|image'
        ]);
        if($request->has('photo')){
            $photo=$request->photo;
            $newphoto=time().$photo->getClientOriginalName();
            $photo->move('upload/post/',$newphoto);
            $post->photo='upload/post/'.$newphoto;
        }
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return redirect()->route('posts')->with('success' , 'success added succseefuly');


    }


    //Delete
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back()
        ->with('success' , 'success delete succseefuly');

   }
   /*
    public function hdelete(Post $post)
    {
        //
    }
    public function restor(Post $post)
    {
        //
    }*/

    
}
