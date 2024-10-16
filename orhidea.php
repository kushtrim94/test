<?php

// $temperatures = array(5, 10, 30, 1, 20, 7, 8); 

// $sum = array_sum($temperatures);

// $days = count($temperatures);

// $average_temperature = $sum / $days;

// echo "The average temperature for the week is: " . $average_temperature ;


// $sumarray = array(3, 2, 1, 4, 5);
// $sum = array_sum($sumarray);
// echo $sum; 
// $iphones = [
//     ['Model', 'Storage', 'Price'],
//     ['iPhone 12', '64GB', '$799'],
//     ['iPhone 12 ', '128GB', '$999'],
//     ['iPhone 13', '128GB', '$899'],
//     ['iPhone 13 ', '256GB', '$1099'],
//     ['iPhone 14', '256GB', '$1199']
// ];

// echo "<table border='1' cellpadding='5' cellspacing='0'>";

// foreach ($iphones as $row) {
//     echo "<tr>";
    
//     foreach ($row as $cell) {
//         echo "<td>" . $cell . "</td>";
//     }
    
//     echo "</tr>";
// }

// $em = [
//     [
//         "name" => "Dea",
//         "age" => "15",
//         "position" => "front-end developer"
//     ],

//     [
//         "name" => "Anna",
//         "age" => "16",
//         "position" => "front-end developer"
//     ],
//     [
//         "name" => "Ema",
//         "age" => "17",
//         "position" => "front-end developer"
//     ]
// ];

// foreach ($em as $em) {
//     echo "Name: " . $em["name"] . ", Age: " . $em["age"] . ", Position: " . $em["position"] . "<br>";
// }
// function calculateTotalPrice($products) {
//     $totalPrice = 0;
//         foreach ($products as $product) {
//             if (isset($product['price']) && is_numeric($product['price'])) {
//                 $totalPrice += $product['price'];
//             }
//         }
//         return $totalPrice;
//     }
    
//     $products = [
//         ['name' => 'Product 1', 'price' => 29.99],
//         ['name' => 'Product 2', 'price' => 49.50],
//         ['name' => 'Product 3', 'price' => 19.99],
//     ];
    
//     echo "Total Price: $" . calculateTotalPrice($products);



// function printTree($tree, $level = 0) {
 
//     foreach ($tree as $key => $node) {
       
//         echo str_repeat("  ", $level) . $key . " - " . $node['info'] . "\n";
        
        
//         if (isset($node['children']) && is_array($node['children'])) {
//             printTree($node['children'], $level + 1);  
//         }
//     }
// }

// $familyTree = [
//     'Grandparent' => [
//         'info' => 'The head of the family',
//         'children' => [
//             'Parent 1' => [
//                 'info' => 'First child of Grandparent',
//                 'children' => [
//                     'Child 1.1' => [
//                         'info' => 'Oldest child of Parent 1',
//                         'children' => []
//                     ],
//                     'Child 1.2' => [
//                         'info' => 'Second child of Parent 1',
//                         'children' => []
//                     ]
//                 ]
//             ],
//             'Parent 2' => [
//                 'info' => 'Second child of Grandparent',
//                 'children' => [
//                     'Child 2.1' => [
//                         'info' => 'First child of Parent 2',
//                         'children' => []
//                     ],
//                     'Child 2.2' => [
//                         'info' => 'Second child of Parent 2',
//                         'children' => [
//                             'Grandchild 2.2.1' => [
//                                 'info' => 'First child of Child 2.2',
//                                 'children' => []
//                             ]
//                         ]
//                     ]
//                 ]
//             ]
//         ]
//     ]
// ];

// printTree($familyTree);
?>

 