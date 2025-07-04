<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$customers = simplexml_load_file('customer.xml');
$loginSuccessful = false;

foreach ($customers->customer as $customer) {
    if ($customer->email == $email && password_verify($password, (string)$customer->password)) {
        $_SESSION['customerID'] = (string)$customer->id;
        $loginSuccessful = true;
        break;
    }
}

if ($loginSuccessful) {
    echo "Success";
} else {
    echo "Invalid email address or password.";
}
?>
