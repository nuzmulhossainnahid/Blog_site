<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Blog-@yield('title')</title>

    @include('user.include.css')
</head>

<body>
@include('user.home.modal')

@include('user.home.header')

<!-- ##### Single Blog Area Start ##### -->
<div class="single-blog-wrapper section-padding-0-100">

    <!-- Single Blog Area  -->
    <div class="single-blog-area blog-style-2 mb-50">
        <div class="single-blog-thumbnail">
            <img src="PostImage/{{$data->image}}" alt="">
            <div class="post-tag-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="post-date">
                                <a href="#">{{ $data->created_at->isoFormat('D') }}
                                    <span>{{ $data->created_at->isoFormat('MMMM') }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- ##### Post Content Area ##### -->
            <div class="col-12 col-lg-9">
                <!-- Single Blog Area  -->
                <div class="single-blog-area blog-style-2 mb-50">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="#" class="post-tag">{{$data->Category}}</a>
                        <h4><a href="#" class="post-headline mb-0">{{$data->Title}}</a></h4>
                        <div class="post-meta mb-50">
                            <p>By <a href="#">{{$author->Name}}</a></p>
                            <p>{{$commentCount}} comments</p>
                        </div>
                        <p>{{$data->Description}}</p>
                        </div>
                </div>

                <!-- About Author -->
                <div class="blog-post-author mt-100 d-flex">
                    <div class="author-thumbnail">
                        <img src="AuthorImage/{{$author->Image}}" alt="">
                    </div>
                    <div class="author-info">
                        <div class="line"></div>
                        <span class="author-role">Author</span>
                        <h4><a href="#" class="author-name">{{$author->Name}}</a></h4>
                        <p>{{$author->Description}}</p>
                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix mt-70">
                    <h5 class="title">Comments</h5>

                    <ol>
                        @foreach($comment as $comment)

                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="CommentImage/{{$comment->image}}" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-date">{{ $comment->created_at->isoFormat('MMMM' .'-'.'D') }}</a>
                                    <p><a href="#" class="post-author">{{$comment->name}}</a></p>
                                    <p>{{$comment->comment}}</p>

                                </div>
                            </div>
                        </li>

                            @endforeach
                    </ol>
                </div>

                <div class="post-a-comment-area mt-70">
                    <h5>Comment</h5>
                    <!-- Reply Form -->
                    <form action="{{url('commentFrom',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="group">
                                    <input type="text" name="name" id="name" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group">
                                    <input type="email" name="email" id="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="group">
                                    <textarea name="comment" id="message" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Comment</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <input type="file" name="image" id="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Your Photo</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn original-btn">Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <form action="#" class="search-form">
                            <input type="search" name="search" id="searchForm" placeholder="Search">
                            <input type="submit" value="submit">
                        </form>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                        <div class="widget-content">
                            <form action="#" class="newsletterForm">
                                <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
                                <button type="submit" class="btn original-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Advertisement</h5>
                        <a href="#"><img src="user/img/bg-img/add.gif" alt=""></a>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Latest Posts</h5>

                        <div class="widget-content">
                            @foreach($subPost as $subPost)

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex align-items-center widget-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="PostImage/{{$subPost->image}}" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}" class="post-tag">{{$subPost->Category}}</a>
                                    <h4><a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}" class="post-headline">{{$subPost->Title}}</a></h4>
                                    <div class="post-meta">
                                        <p><a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}">{{ $subPost->created_at->isoFormat('MMMM' .'-'.'D') }}</a></p>
                                    </div>
                                </div>
                            </div>

                                @endforeach
                             </div>
                    </div>

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Tags</h5>
                        <div class="widget-content">
                            <ul class="tags">
                                <li><a href="#">design</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">music</a></li>
                                <li><a href="#">party</a></li>
                                <li><a href="#">video</a></li>
                                <li><a href="#">photography</a></li>
                                <li><a href="#">adventure</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Single Blog Area End ##### -->

@include('user.home.instagram')
@include('user.home.footer')

@include('user.include.script')

</body>

</html>







