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
        console.log("Server Loading");
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
});
