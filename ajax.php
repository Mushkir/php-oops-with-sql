<?php
require_once './partials/Database.php';

$db = new Database();

// Show All the User details
if (isset($_POST['action']) && $_POST['action'] == 'showUsers') {

    $output = '';
    $allUsers = $db->read();

    $output .= '<table class="table table-striped table-sm table-bordered" id="userTable">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>';

    foreach ($allUsers as $row) {

        $output .= '<tr>
        <td class="text-center">' . $row['id'] . '</td>
        <td>' . $row['first_name'] . '</td>
        <td>' . $row['last_name'] . '</td>
        <td>' . $row['email'] . '</td>
        <td class="text-center">' . $row['phone'] . '</td>
        <td class="d-flex align-items-center justify-content-center gap-3">
            <a href="' . $row['id'] . '" id="infoBtn" title="View Details" class="text-success" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fa-solid fa-circle-info"></i></a>
            <a href="' . $row['id'] . '" id="editBtn" title="Edit Details" class="text-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="' . $row['id'] . '" id="delBtn" title="Delete Detail" class="text-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>';
    }

    $output .= '</tbody></table>';

    echo $output;
    // echo var_dump();
}

// Insert new user
if (isset($_POST['action']) && $_POST['action'] === 'insert') {

    // echo "data from : " . json_encode($_POST);
    $firstNameEl = $_POST['fname'];
    $lastNameEl = $_POST['lname'];
    $emailEl = $_POST['email'];
    $contactNoEl = $_POST['phone'];

    $db->insert($firstNameEl, $lastNameEl, $emailEl, $contactNoEl);
} else {
    // echo "404";
}

// Edit User
if (isset($_POST['userId'])) { // Like $_GET['userId']

    // ! 1. Get the user id
    $userID = $_POST['userId'];

    // ! 2. Fetch the user data
    $userData = $db->getUserById($userID);

    // ! 3. Change into JSON String format and send to frontend
    echo json_encode($userData);
}


// Update Process
if (isset($_POST['action']) && $_POST['action'] === 'updateProcess') {

    $id = $_POST['id'];
    $firstNameEl = $_POST['firstName'];
    $lastNameEl = $_POST['last_name'];
    $userEmailEl = $_POST['user_email'];
    $userPhoneEl = $_POST['user_phone'];

    $db->update($id, $firstNameEl, $lastNameEl, $userEmailEl, $userPhoneEl);
}

// View By Id
if (isset($_GET['userID'])) {

    // Get the user id
    $userID = $_GET['userID'];

    // Get the data from db using userId
    $userData = $db->getUserById($userID);

    // Convert the reuslt into JSON String format
    echo json_encode($userData);

    // Send the response to frontend and change it as JSON format using parse().
    // echo var_dump($userData);
}


if (isset($_GET['userID'])) {

    $userID = $_GET['userID'];

    $db->delete($userID);
}
