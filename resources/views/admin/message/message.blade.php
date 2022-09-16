<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -Message</title>

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
                            <h4 class="card-title">Message Table</h4>


                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                           Subject
                                        </th>
                                        <th>
                                            Message
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
                                                {{$data->name}}
                                            </td>
                                            <td>
                                                {{$data->email}}
                                            </td>

                                            <td>
                                                {{$data->subject}}
                                            </td>
                                            <td>
                                                {{$data->message}}
                                            </td>


                                            <td>
                                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$data->email}}" style="margin: 5px" class="btn btn-success">Replay</a>
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
