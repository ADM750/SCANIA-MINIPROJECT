<?php
$DATABASE_HOST = 'localhost:4306';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'test';

// Create connection
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($email) || empty($password)) {
        exit('Please complete the registration form');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }

    if (strlen($password) > 16 || strlen($password) < 5) {
        exit('Password must be between 5 and 16 characters long!');
    }

    $stmt = $conn->prepare('SELECT id FROM members WHERE username = ? LIMIT 1');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        exit('Username exists, please choose another!');
    }

    $stmt = $conn->prepare('INSERT INTO members (username, email, password) VALUES (?, ?, ?)');
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param('sss', $username, $email, $hashed_password);
    if ($stmt->execute()) {
        echo 'You have successfully registered! You can now login!';
        header("Location: login.php");
    } else {
        echo 'Could not register. Please try again.';
    }
}
?>
