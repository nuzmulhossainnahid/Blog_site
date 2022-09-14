<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- base:css -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="calendar/css/style.css">
    @include('admin.include.css')
</head>
<body>
<div class="container-scroller">
    @include('admin.home.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.home.slider')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12 mb-5 mb-xl-0">
                        <h4 class="font-weight-bold text-dark text-center">Hi, welcome back!</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="elegant-calencar d-md-flex">
                            <div class="wrap-header d-flex align-items-center img" style="background-image: url(calendar/images/bg.jpg);">
                                <p id="reset">Today</p>
                                <div id="header" class="p-0">
                                    <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                                    <div class="head-info">
                                        <div class="head-month"></div>
                                        <div class="head-day"></div>
                                    </div>
                                    <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                                </div>
                            </div>
                            <div class="calendar-wrap">
                                <div class="w-100 button-wrap">
                                    <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                                    <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                                </div>
                                <table id="calendar">
                                    <thead>
                                    <tr>
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
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
<script src="calendar/js/jquery.min.js"></script>
<script src="calendar/js/popper.js"></script>
<script src="calendar/js/bootstrap.min.js"></script>
<script src="calendar/js/main.js"></script>
</body>

</html>
