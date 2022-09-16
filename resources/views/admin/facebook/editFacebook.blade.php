<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -Slider</title>

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
                            <h4 class="card-title">Edit Facebook Link</h4>
                            <a href="{{url('facebook')}}">
                                <button type="button" class="btn btn-info font-weight-bold" style="background-color: #2caae1"> Go Back Facebook Link </button>
                            </a>
                            <form class="forms-sample" action="{{url('editFacebookFrom',$data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Facebook Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1">Link</label>
                                    <textarea class="form-control" name="link" id="exampleTextarea1" rows="4">{{$data->link}}</textarea>
                                </div>
                                <input type="submit" class="btn btn-primary mr-2" style="background-color: deeppink" value="Submit">
                                <a href="{{url('facebook')}}" class="btn btn-light">Cancel</a>
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
