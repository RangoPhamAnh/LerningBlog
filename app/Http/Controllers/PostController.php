<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

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
        $posts = Post::all();

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
        return view('posts.create');
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
                'body'  =>  'required'
        ));

        $post = new Post;

        $post -> title = $request->title;
        $post -> body = $request->body;

        $request->session()->flash('success', 'The blog post was successfully save!');

        $post -> save();
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
        $post = Post::Find($id);
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
        // Xem
        return view('posts.edit')->withPost($post);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
