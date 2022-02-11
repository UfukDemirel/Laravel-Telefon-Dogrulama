<?php
$db = new PDO("mysql:host=localhost;dbname=dogrulama;charset=utf8", "root", "");
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Telefon Doğrulama</title>
</head>
<body>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{route('dogrulapost')}}" method="post">
                            @csrf
                            <div class="form-group last mb-4">
                                <input type="hidden" name="no" value="{{$numara}}">
                                <input class="form-control" type="text" placeholder="Gelen şifreyi giriniz." name="kod">
                            </div>
                            <input type="submit" value="Doğrula" class="btn text-white btn-block btn-primary">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
