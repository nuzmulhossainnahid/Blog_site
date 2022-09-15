<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -Authors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    @include('admin.include.css')
    <link rel="stylesheet" href="author/author.css">
</head>
<body>
<div class="container-scroller">
    @include('admin.home.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.home.slider')
        <div class="main-panel">
            <div class="content-wrapper">


                <div class = "about-wrapper">
                    <div class = "about-left">
                        <div class = "about-left-content">
                            <div>
                                <div class = "shadow">
                                    <div class = "about-img">
                                        <img src = "AuthorImage/{{$data->Image}}" alt = "about image">
                                    </div>
                                </div>

                                <h2>{{$data->Name}}</h2>

                            </div>

                            <ul class = "icons">
                                <li><i class = "fab fa-facebook-f"></i></li>
                                <li><i class = "fab fa-twitter"></i></li>
                                <li><i class = "fab fa-linkedin"></i></li>
                                <li><i class = "fab fa-instagram"></i></li>
                            </ul>
                        </div>

                    </div>

                    <div class = "about-right">


                        <div class = "about-para">
                            <p> {{$data->Description}}</p>

                        </div>

                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
        @include('admin.home.footer')

        <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('admin.include.scrip')

</body>

</html>
