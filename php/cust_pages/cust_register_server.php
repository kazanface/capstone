<?php
session_start();

// initializing variables
$username = "";
//$email    = "";
$errors = array();

// Connection to db
include("../includes/dbConn.php");
$conn = connectToDB();

// REGISTER USER
if (isset($_POST['reg_user_submit'])) {
    // receive all input values from the form
    $username = $_POST['regUsername'];
    $pwd = $_POST['regPwd'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    //if (empty($username)) { array_push($errors, "Username is required"); }
    //if (empty($email)) { array_push($errors, "Email is required"); }
    //if (empty($password_1)) { array_push($errors, "Password is required"); }
    //if ($password_1 != $password_2) {
        //array_push($errors, "The two passwords do not match");
    //}

    // first check the database to make sure
    // a user does not already exist with the same username
    $user_check_query = "SELECT * FROM newUsers WHERE user_name = '$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['user_name'] === $username) {
            array_push($errors, "Username already exists");
        }

        //if ($user['email'] === $email) {
            //array_push($errors, "email already exists");
        //}
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO newUsers (user_name, user_pwd) 
  			  VALUES('$username', '$pwd')";
        mysqli_query($conn, $query);
        //$_SESSION['LoggedInCustUser'] = $username;
        $_SESSION['success'] = "New customer account successfully created.";
        //header('location: cust_orders.php');
    }
}
