<?php
if (isset($_POST['action']) && $_POST['action'] == 'save') {
    $productData = json_decode($_POST['product_data'], true);

    // Load existing product data from the JSON file
    $file = 'product_data.json';
    $data = json_decode(file_get_contents($file), true);
    
    // Add new product to product json
    $data[] = $productData;
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo "Data saved successfully!";
}
?>