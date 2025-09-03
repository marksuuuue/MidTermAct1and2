<?php
echo "GadgetGrove Catalog\n";

echo "Basic Product List:\n";
$productNames = ["comfortable mouse", "cute earpods", "hytec keyboard", "mini speaker", "mousepad"];
$productPrices = [599.00, 299.00, 859.00, 385.90, 199.00];

echo "Product Names: " . implode(", ", $productNames) . "\n";
echo "First product price: ₱" . $productPrices[0] . "\n";
echo "Last product price: ₱" . $productPrices[count($productPrices)-1]."\n\n";


echo "detailed product view:\n";
$keyboard = [
    "name" => "Computer Connections",
    "price" => 599.00,
    "brand" => "PC Express",
    "inStock" => true,
    "description" => "Solid 'to be",
];


echo "product: " . $keyboard["name"] . "\n";
echo "brand: " . $keyboard["brand"] . "\n";
echo "price: ₱" . $keyboard["price"] . "\n";
echo "in stock: " . ($keyboard["inStock"] ? "Yes" : "No") . "\n";

$keyboard["warranty"] = "2 years";
echo "warranty: " . $keyboard["warranty"] . "\n\n";


$catalog = [
    [
        "id" => 1,
        "name" => "comfortable mouse",
        "price" => 599.00,
        "inStock" => true
    ],
    [
        "id" => 2,
        "name" => "cute earpods",
        "price" => 299.00,
        "inStock" => false
    ],
    [
        "id" => 3,
        "name" => "hytec keyboard",
        "price" => 859.00,
        "inStock" => false
    ],
    [
        "id" => 4,
        "name" => "mini speaker",
        "price" => 385.00,
        "inStock" => true
    ],
    [
        "id" => 5,
        "name" => "mouse pad",
        "price" => 199.00,
        "inStock" => true
    ]
];

echo "full catalog:\n";
foreach ($catalog as $product) {
    echo "Product: " . $product["name"] . " - Price: ₱" . $product["price"];
    echo " - " . ($product["inStock"] ? "In Stock" : "Out of Stock") . "\n";
}

echo "\n end of catalog.\n";
?>