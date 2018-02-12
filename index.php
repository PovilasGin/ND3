<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        

        

        $papildai = array(
            '1' => "Proteinas",
            '2' => "BCAA",
            '3' => "Vitaminai",
            '4' => "Omega",
        );
        echo "Geriausi papildai:<br>";
        foreach ($papildai as $supps){
            
            echo $supps."<br>";
        };

        $shopping_cart = [
            [
                'type' => 'vegetables',
                'name' => 'potato',
                'quantity' => '10',
                'price' => '1.0'
            ],
            [
                'type' => 'vegetables',
                'name' => 'onion',
                'quantity' => '5',
                'price' => '0.5'
            ],
            [
                'type' => 'vegetables',
                'name' => 'cucumber',
                'quantity' => '2',
                'price' => '1.2'
            ],
             [
                'type' => 'fruits',
                'name' => 'banana',
                'quantity' => '2',
                'price' => '1.0'
             ],
             [
                'type' => 'fruits',
                'name' => 'apple',
                'quantity' => '3',
                'price' => '1.2'
             ]
        ];

        echo $shopping_cart[$type];
    ?>

</body>
</html>