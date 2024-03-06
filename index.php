<?php
require_once('./partials/connect.php');

$dbObj = new database();

// var_dump($dbObj);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CRUD</title>

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="./style.css">

</head>

<body class="">

    <h1 class="bg-dark text-light text-center py-2">PHP Advance CRUD</h1>

    <div class="container">
        <!-- Form modal -->
        <?php include('./form.php'); ?>

        <!-- Profile -->
        <?php include('./profile.php'); ?>

        <!-- Input Search and Button section -->
        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                    <input type="text" name="" id="" class=" form-control shadow-none " placeholder="Search user...">
                </div>
            </div>

            <div class="col-2">
                <button class="btn btn-dark" typpe="button" data-bs-toggle="modal" data-bs-target="#userModal">Add New User</button>
            </div>
        </div>



        <!-- Table -->
        <?php include('./table.php'); ?>


        <!-- Pagination -->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center ">
                <li class="page-item disabled "><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active "><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>


    <!-- JQuery Link -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <!-- Bootstrap Popper and JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>