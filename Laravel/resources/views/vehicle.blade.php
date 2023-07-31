<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/.png') }} ">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Benny's Rental</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ asset('assets/img/car.png') }}">
            <div class="sidebar-wrapper">
                @include('includes.sidebar')
            </div>
        </div>
        <div class="main-panel">
            @include('includes.navbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <br />
                                <div class="col-md-12">
                                    <a href="{{ route('vehicles.create') }}">
                                        <button type="submit" class="btn btn-dark  btn-fill pull-right">Add New Vehicle
                                            Details</button>
                                    </a>
                                </div>
                                <div class="card-header ">
                                    <h4 class="card-title">VEHICLE DETAILS</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Vehicle ID</th>
                                            <th>Vehicle Model</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Color</th>
                                            <th>Vehicle Plate#</th>
                                            <th>Vehicle Rent Status</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($vehicles as $vehicle)
                                                <tr>
                                                    <td>{{ $vehicle->vehicle_id }}</td>
                                                    <td>{{ $vehicle->vehicle_model }}</td>
                                                    <td>{{ $vehicle->vehicle_type }}</td>
                                                    <td>{{ $vehicle->color }}</td>
                                                    <td>{{ $vehicle->plate }}</td>
                                                    <td>{{ $vehicle->vehicle_status }}</td>
                                                    <td>
                                                        <a href="{{ route('vehicles.edit', $vehicle->vehicle_id) }}"
                                                            style="padding-right: 20px;">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-fill pull-right">Edit</button>
                                                        </a>
                                                        <form
                                                            action="{{ route('vehicles.destroy', $vehicle->vehicle_id) }}"
                                                            method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-fill pull-right">Delete</button>
                                                        </form>
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
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>

                        <p class="copyright text-center">
                            © BENNY RENTALS,
                            Rent car for your needed vehicle
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
