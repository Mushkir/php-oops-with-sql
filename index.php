<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-light " href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Contact</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class=" text-center text-danger fw-normal my-3">CRUD Application using Bootstrap, PHP - OOPs, PDO - MySQL, Ajax, DataTable & SweetAlert</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h4 class="mt-2 text-primary ">All Users in database</h4>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary m-1 float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add New User</button>
                <a href="#" class=" btn btn-success m-1 float-end "> Export to Excel</a>
            </div>
        </div>

        <hr class="my-1 ">


        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="showUser">

                </div>
            </div>
        </div>

        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 ">
                        <form action="" method="post" id="form-data">
                            <div class="form-group mb-3">
                                <input type="text" name="fname" id="fname" placeholder="First Name" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="lname" id="lname" placeholder="Last Name" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" id="email" placeholder="Email" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="tel" name="phone" id="phone" placeholder="Phone" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="submit" name="insert" id="insertUser" class="btn btn-danger w-100 " value="Add User">
                            </div>


                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 ">
                        <form action="" method="post" id="edit-form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group mb-3">
                                <input type="text" name="firstName" id="firstName" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="last_name" id="last_name" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="user_email" id="user_email" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="tel" name="user_phone" id="user_phone" required class="form-control ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="submit" name="update" id="updateUser" class="btn btn-danger w-100 " value="Update User">
                            </div>


                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                </div>
            </div>
        </div>

        <?php include './profile.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.3/datatables.min.js"></script>

    <!-- <script src="./assets//js/jquery.script.js"></script> -->

    <script>
        $(document).ready(function() {

            showAllUsers();

            function showAllUsers() {

                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
                    data: {
                        action: "showUsers"
                    },
                    beforeSend: function() {
                        // console.log("Server Loading");
                    },
                    success: function(respone) {
                        // console.log(respone);
                        $("#showUser").html(respone)
                        $("#userTable").DataTable();

                    },
                    error: function() {}
                })
            }

            // JQuery for Insert Process
            // Storyline
            // 1. Select the Form Element
            // $(document).on("submit", "#form-data", function(e) {

            //     e.preventDefault();

            //     // 2. Send the Ajax request to the server
            //     $.ajax({

            //         url: 'ajax.php',
            //         type: 'POST',
            //         processData: false,
            //         contentType: false,
            //         data: new FormData(this),
            //         beforeSend: function() {
            //             console.log("Request sending from #form-data");
            //         },
            //         success: function(response) {

            //             // console.log(response);
            //             Swal.fire({
            //                 title: 'User Added Successfully!',
            //                 icon: 'success'
            //             })
            //             showAllUsers();
            //             $("#form-data")[0].reset();

            //         },
            //         error: function() {}
            //     })

            // })
            $("#insertUser").click(function(e) {

                e.preventDefault();

                const formData = $("#form-data").serialize();
                // 2. Send the Ajax request to the server
                $.ajax({

                    url: 'ajax.php',
                    type: 'POST',
                    data: formData + "&action=insert",
                    beforeSend: function() {
                        console.log("Request sending from #form-data");
                    },
                    success: function(response) {

                        console.log(response);
                        Swal.fire({
                            title: 'User Added Successfully!',
                            icon: 'success'
                        })
                        showAllUsers();
                        $("#form-data")[0].reset();

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                })

            })

            // Request for Edit
            $(document).on("click", "#editBtn", function(e) {

                e.preventDefault();

                // Need to get the Id
                const userId = $(this).attr("href");

                // Send the Request
                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
                    data: {
                        'userId': userId
                    },
                    success: function(response) {
                        // console.log(response);

                        // ! See the Ajax file for the further steps
                        // ! 4. Change the recieved file into JSON Format.
                        const jsonData = JSON.parse(response)
                        // console.log(jsonData);

                        // ! 5. Assign the values to frontend.
                        $("#id")[0].value = jsonData.id;
                        $("#firstName")[0].value = jsonData.first_name;
                        $("#last_name")[0].value = jsonData.last_name;
                        $("#user_email")[0].value = jsonData.email;
                        $("#user_phone")[0].value = jsonData.phone;
                    }
                })
            })

            // Update Request
            // Storyline
            // 1. Get Update form element
            $("#updateUser").click(function(e) {

                e.preventDefault();

                const editFormEl = $("#edit-form-data").serialize()

                // 2. Send the request to server
                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
                    data: editFormEl + "&action=updateProcess",
                    success: function(response) {
                        // console.log(response);

                        // SweetAlert
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: "btn btn-success me-3",
                                cancelButton: "btn btn-danger me-3"
                            },
                            buttonsStyling: false
                        });
                        swalWithBootstrapButtons.fire({
                            title: "Are you sure to update?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes!",
                            cancelButtonText: "No!",
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                swalWithBootstrapButtons.fire({
                                    title: "Updated!",
                                    text: "Your file has been updated.",
                                    icon: "success"
                                });

                                // Update of User table
                                showAllUsers();
                            } else if (
                                /* Read more about handling dismissals below */
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire({
                                    title: "Cancelled",
                                    text: "Your imaginary file is safe :)",
                                    icon: "error"
                                });
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })

            })

            // View Request
            $(document).on("click", "#infoBtn", function(e) {

                e.preventDefault();

                // Storyline
                // 1. Need to get the ID
                const userID = $(this).attr("href")
                // console.log($(this)[0].attributes[0].value);
                // console.log($(this).attr("href"));
                // 2. Send the request to server using ID
                $.ajax({

                    url: 'ajax.php',
                    type: 'GET',
                    data: {
                        'userID': userID
                    },
                    success: function(response) {

                        // console.log(response);
                        const jsonData = JSON.parse(response);
                        // console.log(jsonData);
                        $("#viewId")[0].value = jsonData.id;
                        $("#userFirstName")[0].value = jsonData.first_name;
                        $("#userLastName")[0].value = jsonData.last_name;
                        $("#userEmailAdd")[0].value = jsonData.email;
                        $("#userPhoneNo")[0].value = jsonData.phone;
                    },
                    error: function(xhr, status, error) {

                        console.log(xhr.responseText);
                    }
                })
            })

            // Delete Request
            $(document).on("click", "#delBtn", function(e) {

                e.preventDefault();

                // Storyline
                // 1. Need to get the id
                const userID = $(this).attr("href")

                // 2. Send the request to server
                $.ajax({

                    url: 'ajax.php',
                    type: 'GET',
                    data: {
                        'userID': userID
                    },
                    success: function(response) {
                        // console.log(response);

                        const userFirstName = JSON.parse(response).first_name

                        Swal.fire({
                            title: `Are you sure to delete ${userFirstName}?`,
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                });

                                showAllUsers();
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                })
            })
        });
    </script>
</body>

</html>