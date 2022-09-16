<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Facebook;
use App\Models\Post;
use App\Models\Slider;
use App\Models\SocialLink;
use App\Models\Subscribe;
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
            $subPost = Post::limit(4)->orderBy('created_at', 'asc')->where('Status','=','post')->get();
            $slider = Post::limit(5)->orderBy('created_at', 'desc')->where('Status','=','post')->get();
            $facebook = Facebook::limit(8)->orderBy('created_at', 'desc')->get();

            $post = Post::limit(5)->orderBy('created_at', 'desc')->where('Status','=','post')->get();
            $social = SocialLink::all()->first();
            return view('user.home',compact('slider','post','subPost','facebook','social'));
        }

    }

    public function readMore()
    {
        $subPost = Post::limit(4)->orderBy('created_at', 'asc')->where('Status','=','post')->get();
        $slider = Post::limit(5)->orderBy('created_at', 'desc')->where('Status','=','post')->get();
        $facebook = Facebook::limit(8)->orderBy('created_at', 'desc')->get();

        $post = Post::where('Status','=','Post')->get();
        $social = SocialLink::all()->first();
        return view('user.home',compact('slider','post','subPost','facebook','social'));
    }

    public function singlePost($id,$AuthorId)
    {
        $facebook = Facebook::limit(8)->orderBy('created_at', 'desc')->get();
        $subPost = Post::limit(4)->orderBy('created_at', 'asc')->where('Status','=','post')->get();
        $data = Post::find($id);
        $author = Author::find($AuthorId);
        $comment = Comment::where('PostId','=',$id)->get();
        $commentCount = Comment::where('PostId','=',$id)->count();
        $social = SocialLink::all()->first();

        return view('user.post.singlePost',compact('data','author','comment','commentCount','subPost','facebook','social'));
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
        return redirect()->back()->with('message', 'Thanks for Comment!');

    }

    public function Subscribe(Request $request)
    {
        $data = new Subscribe();
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('message', 'Thanks for Subscribe!');
    }
//    contact
public function contact()
{

    $facebook = Facebook::limit(8)->orderBy('created_at', 'desc')->get();
    $social = SocialLink::all()->first();

    return view('user.contact.contact',compact('facebook','social'));
}

public function sendContact(Request $request)
{
    $data = new Contact();

    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->Save();
    return redirect()->back()->with('message', 'Message Send Successfully!');

}
}

