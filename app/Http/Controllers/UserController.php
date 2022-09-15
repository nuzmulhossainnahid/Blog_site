<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '1')
            {


                $date = Carbon::now()->addHour(6)->format("d-m-Y");

                return view('admin.home');
            }

            else
            {

                return 'Wait for Super Admin Conformation';
            }
        }

        else
        {
            $subPost = Post::limit(4)->orderBy('created_at', 'asc')->get();
            $slider = Post::limit(5)->orderBy('created_at', 'desc')->get();

            $post = Post::limit(5)->orderBy('created_at', 'desc')->get();
            return view('user.home',compact('slider','post','subPost'));
        }

    }

    public function singlePost($id,$AuthorId)
    {
        $subPost = Post::limit(4)->orderBy('created_at', 'asc')->get();
        $data = Post::find($id);
        $author = Author::find($AuthorId);
        $comment = Comment::where('PostId','=',$id)->get();
        $commentCount = Comment::where('PostId','=',$id)->count();

        return view('user.post.singlePost',compact('data','author','comment','commentCount','subPost'));
    }

    public function commentFrom(Request $request,$id)
    {
        $data = new Comment();
        $data->PostId = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->comment = $request->comment;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('CommentImage'), $filename);
            $data['Image']= $filename;
        }
        $data->save();
        return redirect()->back();

    }
}

