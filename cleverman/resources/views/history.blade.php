<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>History</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->

</head>

<body id="page-top">
    <h1 class="text-center">History</h1>
    <table class="table table-bordered text-center">
        <thead class="font-weight-bold">
            <tr>
                <td>No</td>
                <td>IP Address</td>
                <td>City</td>
                <td>State</td>
                <td>Country</td>
            </tr>
        </thead>
        @foreach($clients as $client)
            <tbody>
                <td>{{$client->id}}</td>
                <td>{{$client->ip_address}}</td>
                <td>{{$client->city}}</td>
                <td>{{$client->state}}</td>
                <td>{{$client->country}}</td>
            </tbody>
        @endforeach    
    </table>
    <!-- JavaScript Libraries -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery/jquery-migrate.min.js"></script>
    <script src="../lib/popper/popper.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/counterup/jquery.waypoints.min.js"></script>
    <script src="../lib/counterup/jquery.counterup.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="../contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="../js/main.js"></script>

</body>
</html>
