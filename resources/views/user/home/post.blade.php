<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9">

            @foreach($post as $post)
            <!-- Single Blog Area  -->
            <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="single-blog-thumbnail">
                            <a href="{{url('singlePost',$post->id.'/'.$post->AuthorId)}}">
                            <img src="PostImage/{{$post->image}}" alt="">
                            </a>
                            <div class="post-date">
                                <a href="#">{{ $post->created_at->isoFormat('D') }}
                                        <span>{{ $post->created_at->isoFormat('MMMM') }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="{{url('singlePost',$post->id.'/'.$post->AuthorId)}}" class="post-tag">{{$post->Category}}</a>
                            <h4><a href="{{url('singlePost',$post->id.'/'.$post->AuthorId)}}" class="post-headline">{{$post->Title}}</a></h4>
                            <p>{{$post->Description}}</p>
                            <div class="post-meta">
                                <p>By <a href="#">{{$post->authorName}}</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- Load More -->
            <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                <a href="{{url('readMore')}}" class="btn original-btn">Read More</a>
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
                        <form action="{{url('Subscribe')}}" class="newsletterForm" method="post">
                            @csrf
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
                                <a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}"" class="post-tag">{{$subPost->Category}}</a>
                                <h4><a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}"" class="post-headline">{{$subPost->Title}}</a></h4>
                                <div class="post-meta">
                                    <p><a href="{{url('singlePost',$subPost->id.'/'.$subPost->AuthorId)}}"">{{ $subPost->created_at->isoFormat('MMMM' .'-'.'D') }}</a></p>
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