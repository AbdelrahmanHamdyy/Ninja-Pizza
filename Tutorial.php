<?php 
        // Print

    echo 'hello, ninjas';

        // Variables & Constants

    $name = 'Yoshi';
    echo $name;
    $age = 30; 
    $name = "Mario";
    define('NAME', 'Hamdy'); // Const

        //Strings

    $string1 = 'my email is ';
    $string2 = 'abdelrahmanhamdy49@gmail.com';
    echo $string1.$string2; // concatenate
    echo 'My name is '.$name;
    echo "Did you mean $name"; // Only works with ""
    echo "She said \"Yes!\""; // Embed "" in ""
    echo $name[1]; // indexing
    echo strlen($name); // Length
    echo strtoupper($name); // UpperCase
    echo strtolower($name); // LowerCase
    echo str_replace('M', 'w', $name);

        // Numbers

    $radius = 25;
    $pi = 3.14;
    // Basic Operators - *, /, +, -, **
    echo $pi * $radius**2;
    // Order of Operation ( B I D M A S )
    // Increment ++ / Decrement --
    $radius++;
    $radius--;
    // Shorthand Operators += -= *= /=
    $age = 20;
    $age += 10;
    // Number functions
    echo floor($pi);
    echo ceil($pi);
    echo pi();

       // Arrays 

    // 1.Indexed arrays
    $peopleOne = ['shaun', 'crystal', 'ryu'];
    echo $peopleOne[1];
    $peopleTwo = array('ken', 'chun-li');
    echo $peopleTwo[1];
    $ages= [20, 30, 40, 50];
    print_r($ages); // Print array
    $ages[1] = 25;
    $ages[] = 60; // Adds a new element at the end = 60
    array_push($ages, 70); // Also does the same thing
    echo count($ages); // Array length
    $peopleThree = array_merge($peopleOne, $peopleTwo); // Merge arrays
    // 2.Associative arrays (key & value pairs) like the map in c++
    $ninjas1 = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
    $ninjas2 = ['Travis'=>'Scott', 'The'=>'Weekend', 'Future'=>'RD'];
    echo $ninjas1['shaun'];
    print_r($ninjas1);
    $ninjas1['toad'] = 'pink'; // Adding a new Key-Value
    print_r($ninjas1);
    echo count($ninjas1);
    $ninjas3 = array_merge($ninjas1, $ninjas2);

        // Multi-Dimensional Arrays
    
    $blogs = [
        ['Xbox', 360, 'FIFA', 'COD'],
        ['PS5', 2021, 'Witcher3', 'Rocket League'],
        ['Nintendo', 2022, 'WatchDogs', 'Jumanji']
    ];
    print_r($blogs[1][2]);
    $games = [
        ['type'=>'Xbox', 'version'=>360, 'cd1'=>'FIFA', 'cd2'=>'COD'],
        ['type'=>'PS5', 'version'=>2021, 'cd1'=>'Witcher3', 'cd2'=>'Rocket League'],
        ['type'=>'Nintendo', 'version'=>2022, 'cd1'=>'WatchDogs', 'cd2'=>'Jumanji']
    ];
    echo $games[0]['type'];
    echo count($blogs);
    $games[] = ['type'=>'Wii', 'version'=>2025, 'cd1'=>'R6Seige', 'cd2'=>'Valorant'];
    print_r($games);
    $popped = array_pop($games); // Removes last element and returns it
    print_r($popped);

        // Loops

    // Regular forloop, while & foreach
    // endl --> '<br/>'
    $blogs = ['Blog1', 'Blog2', 'Blog3'];
    foreach($blogs as $blog) {
        echo $blog.'<br/>';
    }
    $ninjas = ['shaun', 'ryu', 'yoshi'];
    for ($i = 0; $i < count($ninjas); $i++) {
        echo $ninjas[$i].'<br/>';
    }
    $products = [
        ['name' => 'Shiny Star', 'price' => 20],
        ['name' => 'Green Shell', 'price' => 10],
        ['name' => 'Red Shell', 'price' => 15]
    ];
    foreach($products as $product) {
        echo $product['name']. ' - ' .$product['price'];
        echo '<br/>';
    }
    $i = 0;
    while ($i < count($products)) {
        echo $products[$i]['name'];
        echo '<br/>';
        $i++;
    }

        // Booleans and Comparisons

    // && || < > <= >= == ===
    echo true;
    echo false;
    echo 5 < 10; // "1"
    echo 5 > 10; // ""
    echo 5 == 10; // ""
    echo 10 == 10; // "1"
    echo 5 != 10; // "1"
    echo 5 <= 5; // "1"
    echo 5 >= 5; // "1"
    // strings
    echo 'shaun' < 'yoshi'; // s comes before y so true
    echo 'shaun' > 'yoshi'; // ""
    echo 'shaun' > 'Shaun'; // "1"
    echo 'mario' == 'Mario'; // ""
    // loose vs strict equal comparison
    echo 5 == '5'; // "1"
    echo 5 === '5'; // ""
    echo true == "1"; // "1"

        // Conditional Statements

    $price = 20;
    if ($price < 30) {
        // Do something
        echo 'Condition met'.'<br/>';
    }
    else if ($price == 50)
    {
        echo 'Equal'.'<br/>';
    } 
    else {
        echo 'False'.'<br/>';
    }

        // Continue & Break (Just like C++)

        // Functions
    
    function sayHello($name = 'shaun') { // Default argument
        echo "Good Morning $name!";
    }
    sayHello('Hamdy'); // function call
    function formatProduct($product) {
        return "{$product['name']} costs {$product['price']}";
    }
    $returned = formatProduct(['name' => 'PS5', 'price' => 250]);
    echo $returned;

        // Variable Scope (Like C++ with an additional global command)

    $Name = 'Hamdy';
    function printName() {
        global $Name;
        $Name = 'yoshi';
        echo "Hello $Name";
    }
    printName();
    echo $Name;
    // We can also pass by reference -> printName(&$name) {}

        // Include & Require

    // include 'ninjas.php'
    // require 'ninjas.php'
    // Same thing but
    // require doesnt continue with the code if the file is not found

        // GET & POST

    /* Both methods can be used to send data to the server
            GET sends the data in the URL
            POST sends the data in the request header (hidden)
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YarabTop</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div><?php echo $name ?></div>
    <div><?php echo NAME ?></div>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>$ <?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>
    <h1>Prices over $15</h1>
    <ul>
        <?php foreach($products as $product) { ?>
            <?php if($product['price'] > 15) {?>
            <li><?php echo $product['name']; }?></li>
        <?php }?>
    </ul>
</body>
</html>