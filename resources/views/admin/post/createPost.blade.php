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

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create POst</h4>
                            <a href="{{url('post')}}">
                                <button type="button" class="btn btn-info font-weight-bold" style="background-color: #2caae1"> Go Back Authors </button>
                            </a>
                            <form class="forms-sample" action="{{url('createPostFrom')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Author</label>
                                    <select name="AuthorId" class="form-control" id="">
                                        @foreach($data as $data)
                                        <option value="{{$data->id}}">{{$data->id}}-{{$data->Name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Category</label>
                                    <select name="Category" class="form-control" id="">
                                        <option value="Life Style">Life Style</option>
                                        <option value="Technology">Technology </option>
                                        <option value="Programming">Programming</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1">Title</label>
                                    <textarea class="form-control" name="Title" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Sort Description</label>
                                    <textarea class="form-control" name="sortDescription" id="exampleTextarea1" rows="10"></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" name="Description" id="exampleTextarea1" rows="10"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Status</label>
                                    <select name="Status" class="form-control" id="">
                                        <option value="hold">Hold</option>
                                        <option value="post">Post </option>
                                    </select>
                                </div>

                                <input type="submit" class="btn btn-primary mr-2" style="background-color: deeppink" value="Submit">
                                <a href="{{url('post')}}" class="btn btn-light">Cancel</a>
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
