<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefona në Stok</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th{
            background-color:  #E78F81;
            color: white;
        }

    </style>
</head>
<body>
</body>
</html> -->

<?php
// function krijoTabele() {
//     $telefonat = [
//         ['telefon' => 'iPhone 13'],
//         ['telefon' => 'iPhone SE'],  
//         ['telefon' => 'iPhone 15'],
//         ['telefon' => 'iPhone 14']
//     ];
 
//     $stok = [
//         ['stok' => 20],
//         ['stok' => 20], 
//         ['stok' => 20], 
//         ['stok' => 25]
//     ];

//     $shitur = [
//         ['shitur' => 20],
//         ['shitur' => 17],
//         ['shitur' => 15],
//         ['shitur' => 10]
//     ];

//     echo "<table>";
//     echo "<tr><th>Telefoni</th><th>Stok</th><th>Shitur</th></tr>";

//     for ($i = 0; $i < count($telefonat); $i++) {
//         echo "<tr>";
//         echo "<td>" . $telefonat[$i]['telefon'] . "</td>";
//         echo "<td>" . $stok[$i]['stok'] . "</td>";
//         echo "<td>" . $shitur[$i]['shitur'] . "</td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// }

// krijoTabele();


//Flori Ollogu
//Moudle 5
//Easy challange

// $punonjesit = [
//     [
//         "emer" => "Ana",
//         "mosha" => 28,
//         "pozicioni" => "Menaxhere"
//     ],
//     [
//         "emer" => "Blerim",
//         "mosha" => 34,
//         "pozicioni" => "Programues"
//     ],
//     [
//         "emer" => "Drita",
//         "mosha" => 41,
//         "pozicioni" => "Kontabiliste"
//     ],
//     [
//         "emer" => "Arben",
//         "mosha" => 25,
//         "pozicioni" => "Asistent"
//     ]
// ];

// function shfaqPunonjesit($punonjesit) {
//     foreach ($punonjesit as $punonjes) {
//         echo "Emri: " . $punonjes["emer"] . ", Mosha: " . $punonjes["mosha"] . ", Pozicioni: " . $punonjes["pozicioni"] . "\n";
//     }
// }

// shfaqPunonjesit($punonjesit);



// $products = [
//     ['name' => 'Produ', 'price' => 10],
//     ['name' => 'Produ', 'price' => 5],
//     ['name' => 'Pr4', 'price' => 20],
//     ['name' => 'Prs', 'price' => 15]
// ];

// function calculateTotalPrice($products) {
//     $totalPrice = 0;

//     foreach ($products as $product) {
   
//         if (isset($product['price'])) {
//             $totalPrice += $product['price'];
//         }
//     }

//     return $totalPrice;
// }


// $total = calculateTotalPrice($products);
// echo "Total Price: $" . number_format($total, 2);


// function printo_nodet($pem, $niveli = 0) {
//     foreach ($pem as $kyc => $vlera) {
//         echo str_repeat(' ', $niveli * 4) . $kyc . "\n";
//         if (is_array($vlera)) {
//             printo_nodet($vlera, $niveli + 1);
//         }
//     }
// }

// $pem_structure = [
//     'Rrenja' => [
//         'Degë1' => [
//             'Gjethe1' => [],
//             'Gjethe2' => []
//         ],
//         'Degë2' => [
//             'Gjethe3' => [],
//             'Degë2.1' => [
//                 'Gjethe4' => []
//             ]
//         ]
//     ]
// ];

// printo_nodet($pem_structure);

?>

