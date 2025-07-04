<?php
$managerId = $_POST['managerId'];
$password = $_POST['password'];

// Load the manager credentials from a file
$filename = './manager.txt';
$isValid = false;

if (file_exists($filename)) {
    $managers = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  // Read the file into an array of lines
    foreach ($managers as $manager) {
        list($id, $pwd) = explode(',', $manager);  // Split the line into ID and password
        if ($id === trim($managerId) && $pwd === trim($password)) {  // Check both ID and password
            $isValid = true;
            break;
        }
    }
}

if ($isValid) {
    session_start();
    $_SESSION['managerId'] = $managerId;  // Store manager ID in the session
    header('Location: listing.htm');  // Redirect to listing page if valid
} else {
    echo "Invalid Manager ID or Password.";
}
?>
