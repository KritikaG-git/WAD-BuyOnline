<?php
session_start();
if (!isset($_SESSION['managerId'])) {
    // Ensure the user is logged in as a manager
    die("Error: Unauthorized access.");
}

header('Content-Type: text/plain');

$itemName = $_POST['itemName'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];

// Load or create the XML file for goods
$filePath = './goods.xml';
if (file_exists($filePath)) {
    $goods = simplexml_load_file($filePath);
} else {
    $goods = new SimpleXMLElement('<items></items>');
}

// Generate a unique item number
$itemNumber = generateItemNumber($goods);

// Add new item to the XML document
$item = $goods->addChild('item');
$item->addAttribute('number', $itemNumber);
$item->addChild('name', $itemName);
$item->addChild('price', $price);
$item->addChild('quantity', $quantity);
$item->addChild('description', $description);

// Save the updated XML document
$goods->asXML($filePath);

// Output the new item number to the client
echo $itemNumber;

// Function to generate a unique item number
function generateItemNumber($goods) {
    $max = 0;
    foreach ($goods->item as $item) {
        $num = intval($item['number']);
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max + 1;
}
?>
