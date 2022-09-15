<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -Post</title>

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
                            <h4 class="card-title">Post Table</h4>
                            <a href="{{url('createPost')}}">
                                <button type="button" class="btn btn-info font-weight-bold" style="background-color: blue">+ Create New</button>
                            </a>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Post Image
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th>
                                            Author Id
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($data as $data)
                                            <td class="py-1">
                                                <img src="PostImage/{{$data->image}}" style="height: 150px;width: 150px" alt="image"/>
                                            </td>
                                            <td>
                                                {{$data->Category}}
                                            </td>
                                            <td>
                                                <a href="{{url('AuthorId',$data->AuthorId)}}" class="btn btn-success">{{$data->AuthorId}}</a>

                                            </td>
                                            <td>
                                                {{$data->Title}}
                                            </td>
                                            <td>
                                                {{$data->Date}}
                                            </td>
                                            <td>

                                                @if($data->Status=='post')
                                                    <p style="font-size: x-large;color: green;margin: 5px" >Post</p>

                                                    @else
                                                    <p style="font-size: x-large;color: red;margin: 5px" >Hold</p>

                                                    @endif

                                            </td>

                                            <td>
                                                @if($data->Status=='post')
                                                    <a href="{{url('holdPost',$data->id)}}" class="btn btn-danger" style="margin: 5px">Hold</a>
                                                @else
                                                    <a href="{{url('postPost',$data->id)}}" class="btn btn-success" style="margin: 5px">Post</a>
                                                @endif
                                                <a href="{{url('editPost',$data->id)}}" style="margin: 5px" class="btn btn-success">Edit</a>
                                                <a href="{{url('deletePost',$data->id)}}" style="margin: 5px" class="btn btn-danger">Delete</a>
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
