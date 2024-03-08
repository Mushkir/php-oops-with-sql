$(document).ready(function () {
  // Adding users
  $(document).on("submit", "#addForm", function (e) {
    e.preventDefault();

    //Ajax
    $.ajax({
      url: "/PHP-CRUD/ajax.php",
      type: "POST",
      // dataType: "Json",
      dataType: "text",
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function () {
        console.log("Data Loading");
        // Here we can give loading menu also
      },
      success: function (response) {
        console.log(response);
      },
      error: function (request, error) {
        console.log(arguments);
        console.log("Error " + error);
      },
    });
  });
});

/*
$.ajax({
  ! Important things:
* 1. URL = AJAX working file Relative Path,
* 2. type = "GET" / "POST",
* 3. data = It can be FormData or other single data,
* 4. dataType = "json",

! 03 Functions:
* 5. beforeSend: function() {
      Set of code...
      Ex: Loading screen / console.log();
* }

* 6. success: function(response) {
      Set of codes...
      Ex: Loading screen / console.log();
* }

* 7. error: function(requesyt, error) {
      console.log(arguments);
      console.log("Error : " + error);

* }
})
 
*/
