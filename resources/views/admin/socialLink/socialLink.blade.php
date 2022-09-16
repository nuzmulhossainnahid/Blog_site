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

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider Table</h4>
                            <a href="{{url('createSocialLink')}}">
                                <button type="button" class="btn btn-info font-weight-bold" style="background-color: blue">+ Create New</button>
                            </a>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Pinterest
                                        </th>

                                        <th>
                                            Facebook
                                        </th>
                                        <th>
                                            Twitter
                                        </th>
                                        <th>
                                            Dribbble
                                        </th>
                                        <th>
                                            Behance
                                        </th>
                                        <th>
                                            Linkedin
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($data as $data)
                                            <td >
                                                {{$data->Pinterest}}
                                            </td>

                                            <td>
                                                {{$data->Facebook}}
                                            </td>
                                            <td>
                                                {{$data->Twitter}}
                                            </td>
                                            <td>
                                                {{$data->Dribbble}}
                                            </td>
                                            <td>
                                                {{$data->Behance}}
                                            </td>
                                            <td>
                                                {{$data->Linkedin}}
                                            </td>

                                            <td>
                                                <a href="{{url('editSocialLink',$data->id)}}" style="margin: 5px" class="btn btn-success">Edit</a>
                                                <a href="{{url('deleteSocialLink',$data->id)}}" style="margin: 5px" class="btn btn-danger">Delete</a>
                                            </td>



                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
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
