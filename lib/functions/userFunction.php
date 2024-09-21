<?php

// Include database connection
include_once("db_conn.php");

// Create user registration function
function userRegistration($userName, $userEmail, $userpass, $userPhone, $userNic) 
{
    // Check if any fields are empty
    if(empty($userName) || empty($userEmail) || empty($userpass) || empty($userPhone) || empty($userNic)) {
        return "All fields are required!";
    }


    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format!";
    }

    // Create database connection
    $db_conn = Connection();

    // Data insert query
    $insertSql = "INSERT INTO user_tbl(user_name, user_email, user_phone, user_NIC, user_status)
                  VALUES('$userName', '$userEmail', '$userPhone', '$userNic', 1);";

    $sqlResult = mysqli_query($db_conn, $insertSql);

    // Check for database errors
    if(mysqli_connect_errno()) {
        return mysqli_connect_error();
    } else {
        // If registration is successful, insert into the login table
        if($sqlResult) {
            // Use MD5 to hash the password
            $newPassword = md5($userpass);

            $insertLogin = "INSERT INTO login_tbl(login_email, login_pwd, login_role, login_status)
                            VALUES('$userEmail', '$newPassword', 'user', 1);";

            $loginResult = mysqli_query($db_conn, $insertLogin);

            // Check for database errors
            if(mysqli_connect_errno()) {
                return mysqli_connect_error();
            }
            return "Your Registration is Successful!";
        } else {
            return "Registration failed, please try again!";
        }
    }
}

// Login function
function Authentication($userName, $userPass) { 
    // Check if fields are empty
    if(empty($userName) || empty($userPass)) {
        return "All fields are required!";
    }

    // Validate email format
    if (!filter_var($userName, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format!";
    }

    // Call database connection
    $db_conn = Connection();
    $sqlFetchUser = "SELECT * FROM login_tbl WHERE login_email = '$userName';";
    $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

    // Check for database errors
    if(mysqli_connect_errno()) {
        return mysqli_connect_error();
    }

    // Convert user password into a hash value
    $newpass = md5($userPass);

    // Check the number of rows
    $norows = mysqli_num_rows($sqlResult);

    // Validate if records are found
    if($norows > 0) {
        // Fetch the user records
        $rec = mysqli_fetch_assoc($sqlResult);

        // Validate the password
        if($rec['login_pwd'] == $newpass) {
            // Validate the user login status
            if($rec['login_status'] == "1") {
                if($rec['login_role'] == "admin") {
                    // Redirect to the admin dashboard
                    header('location:home1.php');
                    exit;
                } else {
                    // Redirect to the user dashboard
                    header('location:home2.php');
                    exit;
                }
            } else {
                return "Your account has been deactivated!";
            }
        } else {
            return "Your password is incorrect! Please try again!";
        }
    } else {
        return "No records found!";
    } 
}


function empRegistration($empName, $empEmail, $empNic, $empTel, $empDob) {

    if(empty($empName) || empty($empEmail) || empty($empNic) || empty($empTel) || empty($empDob)) {
        return "All fields are required!";
    }

  
    if (!filter_var($empEmail, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format!";
    }

    $db_conn = Connection();

    $insert = "INSERT INTO emp_tbl(emp_name, emp_email, emp_nic, emp_tel, emp_dob)
               VALUES ('$empName', '$empEmail', '$empNic', '$empTel', '$empDob');";

    $result = mysqli_query($db_conn, $insert);

    if($result) {
        return "Registration Successful!";
    } else {
        return "Registration Failed!";
    }
}
?>
