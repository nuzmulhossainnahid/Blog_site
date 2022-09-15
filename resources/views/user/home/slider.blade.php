<div class="hero-slides owl-carousel">
    <!-- Single Slide -->
    @foreach($slider as $slider)

    <div class="single-hero-slide bg-img" style="background-image: url(PostImage/{{$slider->image}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="slide-content text-center">
                        <div class="post-tag">
                            <a href="{{url('singlePost',$slider->id.'/'.$slider->AuthorId)}}" data-animation="fadeInUp">{{$slider->Category}}</a>
                        </div>
                        <h2 data-animation="fadeInUp" data-delay="250ms"><a href="{{url('singlePost',$slider->id.'/'.$slider->AuthorId)}}">{{$slider->Title}}</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @endforeach
</div>