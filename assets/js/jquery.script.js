$(document).ready(function () {
  showAllUsers();

  function showAllUsers() {
    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: {
        action: "showUsers",
      },
      beforeSend: function () {
        // console.log("Server Loading");
      },
      success: function (respone) {
        // console.log(respone);
        $("#showUser").html(respone);
        $("#userTable").DataTable();
      },
      error: function () {},
    });
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
  $("#insertUser").click(function (e) {
    e.preventDefault();

    const formData = $("#form-data").serialize();
    // 2. Send the Ajax request to the server
    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: formData + "&action=insert",
      beforeSend: function () {
        console.log("Request sending from #form-data");
      },
      success: function (response) {
        console.log(response);
        Swal.fire({
          title: "User Added Successfully!",
          icon: "success",
        });
        showAllUsers();
        $("#form-data")[0].reset();
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  });

  // Request for Edit
  $(document).on("click", "#editBtn", function (e) {
    e.preventDefault();

    // Need to get the Id
    const userId = $(this).attr("href");

    // Send the Request
    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: {
        userId: userId,
      },
      success: function (response) {
        // console.log(response);

        // ! See the Ajax file for the further steps
        // ! 4. Change the recieved file into JSON Format.
        const jsonData = JSON.parse(response);
        // console.log(jsonData);

        // ! 5. Assign the values to frontend.
        $("#id")[0].value = jsonData.id;
        $("#firstName")[0].value = jsonData.first_name;
        $("#last_name")[0].value = jsonData.last_name;
        $("#user_email")[0].value = jsonData.email;
        $("#user_phone")[0].value = jsonData.phone;
      },
    });
  });

  // Update Request
  // Storyline
  // 1. Get Update form element
  $("#updateUser").click(function (e) {
    e.preventDefault();

    const editFormEl = $("#edit-form-data").serialize();

    // 2. Send the request to server
    $.ajax({
      url: "ajax.php",
      type: "POST",
      data: editFormEl + "&action=updateProcess",
      success: function (response) {
        // console.log(response);

        // SweetAlert
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: "btn btn-success me-3",
            cancelButton: "btn btn-danger me-3",
          },
          buttonsStyling: false,
        });
        swalWithBootstrapButtons
          .fire({
            title: "Are you sure to update?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            reverseButtons: true,
          })
          .then((result) => {
            if (result.isConfirmed) {
              swalWithBootstrapButtons.fire({
                title: "Updated!",
                text: "Your file has been updated.",
                icon: "success",
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
                icon: "error",
              });
            }
          });
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  });

  // View Request
  $(document).on("click", "#infoBtn", function (e) {
    e.preventDefault();

    // Storyline
    // 1. Need to get the ID
    const userID = $(this).attr("href");
    // console.log($(this)[0].attributes[0].value);
    // console.log($(this).attr("href"));
    // 2. Send the request to server using ID
    $.ajax({
      url: "ajax.php",
      type: "GET",
      data: {
        userID: userID,
      },
      success: function (response) {
        // console.log(response);
        const jsonData = JSON.parse(response);
        // console.log(jsonData);
        $("#viewId")[0].value = jsonData.id;
        $("#userFirstName")[0].value = jsonData.first_name;
        $("#userLastName")[0].value = jsonData.last_name;
        $("#userEmailAdd")[0].value = jsonData.email;
        $("#userPhoneNo")[0].value = jsonData.phone;
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      },
    });
  });
});
