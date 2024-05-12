<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page 2</title>
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
        .bg-image {
            height: 100vh;
            width: 100%;
            background-image: url('https://img.freepik.com/free-vector/paper-style-white-monochrome-background_52683-66443.jpg?w=1380&t=st=1703240803~exp=1703241403~hmac=ded191aaa7b358c8176248df43bf5a19865236758394d89fb9ec1969ab06c310');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>



<body class="bg-image">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-8">
                <?php if (isset($_SESSION['errors'])) {
                    echo "<p class='alert alert-danger'>";
                    foreach ($_SESSION['errors'] as $key => $errorMsg) {
                        echo $errorMsg . "<br>";
                    }
                    echo "</p>";
                }
                ?>
                <form action="process-form.php" method="POST">
                    <div class="row flex-wrap">
                        <p class="text-center fs-1 p-3">You are one step away from your webpage</p>
                        <div class="col-4 ">

                            <div class="bg-secondary bg-gradient rounded p-3">
                                <div class="mb-3">
                                    <label for="urlCoverImage" class="form-label">Cover image URL</label>
                                    <input type="url" class="form-control" id="urlCoverImage" aria-describedby="urlCoverImage" name="urlCoverImage">

                                </div>
                                <div class="mb-3">
                                    <label for="mainTitle" class="form-label">Main Title Page</label>
                                    <input type="text" class="form-control" id="mainTitle" name="mainTitle">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Subtitle of Page</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                                </div>
                                <div class="mb-3">
                                    <label for="personDescription" class="form-label">Something about you</label>
                                    <textarea name="personDescription" id="personDescription" class="w-100 rounded"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Your telephone number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location">
                                </div>

                            </div>
                            <div class="col-12 bg-secondary bg-gradient rounded mt-4">
                                <div class="bg-secondary bg-gradient rounded p-3">
                                    <p>Do you provide services or products?</p>

                                    <select name="type" id="" class="w-100 p-2">
                                        <option value="Services">Services</option>
                                        <option value="Products">Products</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-secondary bg-gradient rounded p-3">
                                <p>Provide url for an image and description of your service/product</p>
                                <div class="mb-3">
                                    <label for="urlImage1" class="form-label">Image URL</label>
                                    <input type="url" class="form-control" id="urlImage1" aria-describedby="urlImage1" name="urlImage1">

                                </div>
                                <div class="mb-3">
                                    <label for="descriptionImage1" class="form-label">Description of service/product</label>
                                    <textarea name="descriptionImage1" id="descriptionImage1" class="w-100 rounded"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="urlImage2" class="form-label">Image URL</label>
                                    <input type="url" class="form-control" id="urlImage2" name="urlImage2">
                                </div>
                                <div class="mb-3">
                                    <label for="descriptionImage2" class="form-label">Description of service/product</label>
                                    <textarea name="descriptionImage2" id="descriptionImage2" class="w-100 rounded"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="urlImage3" class="form-label">Image URL</label>
                                    <input type="url" class="form-control" id="urlImage3" name="urlImage3">
                                </div>
                                <div class="mb-3">
                                    <label for="descriptionImage3" class="form-label">Description of service/product</label>
                                    <textarea name="descriptionImage3" id="descriptionImage3" class="w-100 rounded"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="bg-secondary bg-gradient rounded p-3">
                                <p>Provide a description of your company, something people shoud be aware of before they contact you:</p>
                                <div class="mb-3">
                                    <textarea name="descriptionProdServ" id="descriptionProdServ" class="w-100 rounded"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="urlLinkedin" class="form-label">Linkedin</label>
                                    <input type="url" class="form-control" id="urlLinkedin" name="urlLinkedin">
                                </div>
                                <div class="mb-3">
                                    <label for="urlFacebook" class="form-label">Facebook</label>
                                    <input type="url" class="form-control" id="urlFacebook" name="urlFacebook">
                                </div>
                                <div class="mb-3">
                                    <label for="urlTwitter" class="form-label">Twitter</label>
                                    <input type="url" class="form-control" id="urlTwitter" name="urlTwitter">
                                </div>
                                <div class="mb-3">
                                    <label for="urlGoogle" class="form-label">Google+</label>
                                    <input type="url" class="form-control" id="urlGoogle" name="urlGoogle">
                                </div>

                            </div>

                        </div>
                        <div class="col-12 text-center mt-5">

                            <button type="submit" class="btn btn-secondary w-50">Submit</button>

                        </div>
                </form>
            </div>
        </div>

    </div>
    </div>

    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>

<?php session_unset();
?>