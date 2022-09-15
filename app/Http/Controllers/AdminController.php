<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    Authors
    public function authors()
    {
        $data = Author::all();
        return view('admin.authors.authorsView',compact('data'));
    }

    public function createAuthors()
    {

        return view('admin.authors.createAuthors');
    }
    public function createAuthorsFrom(Request $request)
    {
        $data = new Author();

        $data->Name =$request->name;
        $data->Description =$request->description;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('AuthorImage'), $filename);
            $data['Image']= $filename;
        }
        $data->save();
        return redirect('authors');
    }

    public function editAuthor($id)
    {
        $data = Author::find($id);

        return view('admin.authors.editAuthor',compact('data'));
    }
    public function editAuthorsFrom(Request $request,$id)
    {
        $data = Author::find($id);
        $data->Name =$request->name;
        $data->Description =$request->description;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('AuthorImage'), $filename);
            $data['Image']= $filename;
        }
        $data->save();
        return redirect('authors');

    }
    public function deleteAuthor($id)
    {
        $data = Author::find($id);
        $data->delete();
        return redirect('authors');

    }


//    Post
    public function post()
    {
        $data = Post::all();

        return view('admin.post.postView',compact('data'));
    }

    public function createPost()
    {
        $data = Author::all();

        return view('admin.post.createPost',compact('data'));
    }
    public function createPostFrom(Request $request)
    {
        $data = new Post();
        $author = Author::find($request->AuthorId);
        $authorName = $author->Name;

        $data->authorName = $authorName;
        $data->Category =$request->Category;
        $data->Title =$request->Title;
        $data->AuthorId =$request->AuthorId;
        $data->sortDescription =$request->sortDescription;
        $data->Description =$request->Description;
        $data->Status =$request->Status;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('PostImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect('post');
    }

    public function editPost($id)
    {

        $post = Post::find($id);

        return view('admin.post.editPost',compact('post'));
    }
    public function editPostFrom(Request $request,$id)
    {
        $data = Post::find($id);
        $data->Date =$request->Date;
        $data->Category =$request->Category;
        $data->Title =$request->Title;
        $data->sortDescription =$request->sortDescription;
        $data->Description =$request->Description;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('PostImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect('post');

    }
    public function deletePost($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect('post');

    }

public function AuthorId($AuthorId)
{
    $data = Author::find($AuthorId);
    return view('admin.authors.authorInView',compact('data'));
}
public function holdPost($id)
{
    $data = Post::find($id);
    $data->Status = 'hold';
    $data->save();
    return redirect('post');
}
public function postPost($id)
{
    $data = Post::find($id);
    $data->Status = 'post';
    $data->save();
    return redirect('post');
}

//Slider

public function slider()
{
    $data = Post::limit(5)->orderBy('created_at', 'desc')->get();
    return view('admin.slider.slider',compact('data'));
}
    public function createSlider()
    {

        return redirect('post');
    }

    public function deleteSlider($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect('slider');

    }


}
