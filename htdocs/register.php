<?php
$filePath = './customer.xml';  // Adjust to your server configuration

if (file_exists($filePath)) {
    $customers = simplexml_load_file($filePath);
} else {
    $customers = new SimpleXMLElement('<customers></customers>');
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

foreach ($customers->customer as $customer) {
    if ($customer->email == $email) {
        echo "Email already exists!";
        exit;
    }
}

$newCustomer = $customers->addChild('customer');
$newCustomer->addChild('name', $name);
$newCustomer->addChild('email', $email);
$newCustomer->addChild('password', $password);
$newCustomer->addChild('phone', $phone);

$customers->asXML($filePath);
echo "Registration successful!";
?>
