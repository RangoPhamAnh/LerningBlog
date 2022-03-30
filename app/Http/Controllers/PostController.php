<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Dotenv\Result\Success;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Tag;
use Image;





class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // tạo biến và lưu trữ của tất cả các bolg từ database
        $posts = Post::orderBy('id','desc')->paginate(5);

        // trả về một chế độ xem và chuyển vào biến trên
        return view('posts.index') -> withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this -> Validate($request,array(
                'title' =>  'required|max:255',
                'slug'  =>  'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
                'body'  =>  'required'
        ));

        $post = new Post;

        $post -> title = $request->title;
        $post -> slug = $request ->slug;
        $post -> category_id = $request->category_id;
        $post -> body = $request->body;

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $post->image = $filename;
        }

        $post -> save();
        $post -> tags()->sync($request->tags, false);

        $request->session()->flash('success', 'The blog post was successfully save!');

        return redirect() -> route('posts.show', $post -> id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show') -> withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Tìm kiếm
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        foreach  ($categories as $category){
            $cats[$category->id] = $category -> name;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag){
            $tags2[$tag->id] = $tag->name;
        }
        // Xem
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $post = Post::find($id);
        if($request->input('slug') == $post->slug ){
            $this->validate($request, array(
                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            )); 
        }else{

        $this->validate($request,array(
            'title'=> 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));
        }
        //Lưu vào database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug =$request ->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body =$request->input('body');

        $post->save();
        if(isset($request->tags)){
            $post->tags()->sync($request->tags, true);
        }else{
            $post->tags()->sync(array());
        }
        //Cài đặt lưu nhanh
        $request->session()->flash('success', 'The blog post was successfully save!');
        
        //lưu nhanh đến post show
        return redirect()->route('posts.show' , $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = POST::find($id);
        $post -> tags()->detach();

        $post -> delete();

        $request->session()->flash('success', 'The blog post was successfully delete!');

        return redirect()->route('posts.index');
    }
}
