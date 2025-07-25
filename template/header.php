<?php
include("php/koneksi.php");
?>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<style type="text/css">
    .login-form {
      width: 400px;
      margin: 50px auto;
    }

    .login-form form {
      margin-bottom: 15px;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 45px;
      border-radius: 20px;
    }


    .login-form h2 {
      margin: 0 0 15px;
    }

    .form-control,
    .btn {
      min-height: 38px;
      border-radius: 2px;
    }

    .btn {
      font-size: 15px;
      font-weight: bold;
    }
  </style>

<head>
    <title>SI KosKOsan </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- online java scrip  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <!-- navigasi -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">SIMKOS</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentang.php">Tentang</a>
                        </li>
                    </ul>

                    <!-- pencarian -->
                </div>
            </div>
        </nav>
        <!-- tutup navigasi  -->

        <!-- jumbotron header  -->

        <div class="jumbotron bg-secondary" style="color:white;padding-top:10%;border-radius:20px;">

            <div id="black"></div>

            <div class="animated fadeInDown">
                <div class="container-fluid">
                    <div class="col-md-8 col-md-offset-1">

                        <h1>Sistem Informasi Kost<br class="visible-lg " /> Penyedia Jasa Layanan Kost Online</h1>
                        <hr style="width:25%;text-align:left;margin:30px 0; border:2.5px solid #fff;" />

                    </div>


                </div>
            </div>
        </div>

        <!-- tutup jumbotron  -->


    </div>
</body>