<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -Social Link</title>

    @include('admin.include.css')
</head>
<body>
<div class="container-scroller">
    @include('admin.home.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.home.slider')
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Social Link</h4>
                            <a href="{{url('socialLink')}}">
                                <button type="button" class="btn btn-info font-weight-bold" style="background-color: #2caae1"> Go Back Slider </button>
                            </a>
                            <form class="forms-sample" action="{{url('createSocialFrom')}}" method="post" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">
                                    <label for="exampleTextarea1">Pinterest</label>
                                    <textarea class="form-control" name="Pinterest" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea1">Facebook</label>
                                    <textarea class="form-control" name="Facebook" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea1">Twitter</label>
                                    <textarea class="form-control" name="Twitter" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea1">Dribbble</label>
                                    <textarea class="form-control" name="Dribbble" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleTextarea1">Behance</label>
                                    <textarea class="form-control" name="Behance" id="exampleTextarea1" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1">Linkedin</label>
                                    <textarea class="form-control" name="Linkedin" id="exampleTextarea1" rows="4"></textarea>
                                </div>






                                <input type="submit" class="btn btn-primary mr-2" style="background-color: deeppink" value="Submit">
                                <a href="{{url('socialLink')}}" class="btn btn-light">Cancel</a>
                            </form>
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
