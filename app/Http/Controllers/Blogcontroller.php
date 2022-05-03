<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;


class Blogcontroller extends Controller
{
    //Website end posts listing
    public function index()
    {
        $blog = new Blog();
        $posts =     $blog->get();
        return view('index', ['posts' => $posts]);
    }

    //Dashboard end posts listing
    public function listBlogs()
    {
        $blog = new Blog();
        $posts = $blog->get();
        return view('blogs_list', ['posts' => $posts]);
    }

    //Create blade
    public function createBlog()
    {
        return view('create_blog');
    }


    //Store or udpate the post
    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);

        $blog = new Blog();
        $id = $request->id;

        $blog->updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'title' => $request->title,
                'date' => $request->date,
                'author' => $request->author,
                'description' => $request->description,
                'tags' => $request->tags,
                'created_by' => Auth::user()->id,
            ]
        );
        return redirect('cms-blogs');
    }

    //Edit post
    public function blogDetails($id)
    {
        $post = Blog::find($id);
        return view('edit_blog', ['post' => $post]);
    }

    //Delete post
    public function destroy($id)
    {
        $post = Blog::find($id);
        $postDeleted = $post->delete();
        if ($postDeleted) {
            return redirect('cms-blogs');
        }
    }
}
