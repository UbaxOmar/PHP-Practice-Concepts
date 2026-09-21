<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   // creating array - numerically
   $names = array();

   //second way to intilialize array
   $names  [0] ="upah im programmer";
    $names  [1] =123;
    $names[]=12.34;

    echo $names[0] . "<br>";
    echo $names[1] . "<br>";
     echo $names[2] . "<br>";

    // display all
    echo "<br>";
    echo "<pre>";
    var_dump($names);
    echo "</pre>";

    $info = array(
        "101", 
        "Upah omar alasow",
        20,
        "Karan District",
        "single"
    );

    //To loop through and print all the values of an indexed array, you could use for lopp
        echo"array values using for loop: <br>";
        for($i =0; $i <count($info); $i++){
            echo $info [$i] . "<br>";
        
        }

        //example of associative arrray to store information about a person

        $info = array (
            "id"=>"101",
            "name"=>"upah omar",
            "age"=>20,
            "address"=>"karan District",
            "status"=>"single",
            "weight"=> 160.5
        );
        echo "<pre>";
        echo "information about rhe person: <br>";
        print_r($info);
        var_dump($info);
        echo"</pre>";

?>
</body>
</html>