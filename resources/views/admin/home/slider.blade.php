<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    {{--<div class="user-profile">--}}
        {{--<div class="user-image" style="margin-left: 80px">--}}
            {{--<img src="admin/images/faces/face28.png">--}}
        {{--</div>--}}
        {{--<div class="user-name">--}}
            {{--Edward Spencer--}}
        {{--</div>--}}
        {{--<div class="user-designation">--}}
            {{--Developer--}}
        {{--</div>--}}
    {{--</div>--}}
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('authors')}}">
                <i class="icon-disc menu-icon"></i>
                <span class="menu-title">Authors</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="{{url('post')}}" >
                <i class="icon-pie-graph menu-icon"></i>
                <span class="menu-title">Post</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('slider')}}">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">Slider Image</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('facebook')}}">
                <i class="icon-pie-graph menu-icon"></i>
                <span class="menu-title">Facebook</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('socialLink')}}">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Social Link</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('messageView')}}">
                <i class="icon-help menu-icon"></i>
                <span class="menu-title">Message</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Ad</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->