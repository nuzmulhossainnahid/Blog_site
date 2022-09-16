<!-- ##### Instagram Feed Area Start ##### -->
<div class="instagram-feed-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="insta-title">
                    <h5>Follow me @ Facebook</h5>
                </div>
            </div>
        </div>
    </div>



    <!-- Instagram Slides -->
    <div class="instagram-slides owl-carousel">
        <!-- Single Insta Feed -->
        @foreach($facebook as $facebook)
        <div class="single-insta-feed">
            <img src="facebookImage/{{$facebook->image}}" style="height: 280px" alt="">
            <!-- Hover Effects -->
            <div class="hover-effects">
                <a href="{{$facebook->link}}" target="_blank" class="d-flex align-items-center justify-content-center"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
        @endforeach

    </div>



</div>
<!-- ##### Instagram Feed Area End ##### -->