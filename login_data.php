<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


echo "hello";

echo"<script>alert('hi')</script>";

// Check connection
$conn = new mysqli("localhost", "root", "", "wdd_project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// Function to save user data
function saveUserData($username, $email, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password before saving it to the database
    $sql = "INSERT INTO registration (uname, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to check login credentials
function checkLogin($username, $password) {
    global $conn;
    $sql = "SELECT * FROM registration WHERE uname='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            return true; // Password is correct
        } else {
            return false; // Password is incorrect
        }
    } else {
        return false; // Username not found
    }
}

if(isset($_POST['login'])) {
    $username = $_POST['login_email'];
    $password = $_POST['login_password'];

    if(checkLogin($username, $password)) {
        echo "Login successful";
        // Redirect the user to a logged-in page
    } else {
        echo "Invalid username or password";
        // Handle invalid login
    }
}

if(isset($_POST['signup'])) {
    $username = $_POST['signup_username'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];

    saveUserData($username, $email, $password);
    // Optionally, redirect the user to a logged-in page or display a success message
}

// Usage examples
// Save user data to database
// saveUserData("john_doe", "john@gmail.com", "password");

// Check login credentials
// if (checkLogin("john_doe", "password")) {
//     echo "Login successful";
// } else {
//     echo "Invalid username or password";
// }

$conn->close();
?>