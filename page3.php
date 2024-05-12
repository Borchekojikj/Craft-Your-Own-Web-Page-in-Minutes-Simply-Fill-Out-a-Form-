<?php

if (!isset($_GET['id'])) {
    header('Location: page2.php?error=invalidid');
    die();
}

$id = $_GET['id'];


$pdo = new PDO("mysql:host=localhost;dbname=challenge16_db", 'root', '');
$sql = "SELECT * FROM websitedata WHERE id = :id";
$statment = $pdo->prepare($sql);
$statment->bindParam('id', $id, PDO::PARAM_INT);
$statment->execute();
$website = $statment->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        .bg-image-main {
            background-image: url('<?= $website['urlCoverImage'] ?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .vh-50 {
            min-height: 50vh;
        }

        .card-img-top {
            width: 100% !important;
        }

        a {
            text-decoration: none;
        }

        footer a:not(:last-child) {
            margin-right: 5px;
        }

        .navbar a:hover {
            background-color: lightblue;
            border-radius: 5px;

        }

        .card img {
            width: 100%;
            height: 350px;
        }
    </style>

</head>

<body>

    <div class="container-fluid px-0">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand px-2" href="#">Webster</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#card"><?= $website['type'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>


                    </ul>


                </div>
            </div>
        </nav>
        <!-- Banner Section -->
        <div class="bg-image-main text-center text-white vh-50 ">
            <p class="h1 p-5"><?= $website['mainTitle'] ?></p>
            <p class="h4  pt-5 w-50 m-auto mt-5"><?= $website['subtitle'] ?></p>
        </div>
        <!-- About us -->
        <div id="about">
            <div class="row justify-content-center text-center p-5">
                <div class="col-6">


                    <p class="h3">About us</p>
                    <p><?= $website['personDescription'] ?></p>
                    <hr>
                    <p class="mb-0">Tel: <?= $website['phone'] ?></p>
                    <p>Location: <?= $website['location'] ?></p>
                </div>
            </div>
        </div>

        <!-- Card Section -->
        <div class="row justify-content-center" id="card">
            <div class="col-8">
                <p class="h3"><?= $website['type'] ?></p>
                <div class="row pb-5">
                    <div class="col-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?= $website['urlImage1'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $website['type'] ?> One Description</h5>
                                <p class="card-text"><?= $website['descriptionImage1'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?= $website['urlImage2'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $website['type'] ?> Two Description</h5>
                                <p class="card-text"><?= $website['descriptionImage2'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?= $website['urlImage3'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $website['type'] ?> Two Description</h5>
                                <p class="card-text"><?= $website['descriptionImage3'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="py-4">
            </div>
        </div>


        <!-- Contact Section -->

        <div class="row justify-content-center" id="contact">
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <p class="h3">Contact</p>
                        <p><?= $website['descriptionProdServ'] ?></p>
                    </div>
                    <div class="col-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <textarea name="message" id="" class="w-100"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send</button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>


        <!-- Footer -->

        <footer class="text-center bg-dark text-white py-2 mt-3">
            <p class="mb-1">Copyright by Borche &copy; Brainster</p>
            <div class="d-flex justify-content-center">
                <a href="<?= $website['urlLinkedin'] ?>" target="_blank">LinkedIn</a>
                <a href="<?= $website['urlFacebook'] ?>" target="_blank">Facebook</a>
                <a href="<?= $website['urlTwitter'] ?>" target="_blank">Twitter</a>
                <a href="<?= $website['urlGoogle'] ?>" target="_blank">Google+</a>
            </div>
        </footer>
    </div>



    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>