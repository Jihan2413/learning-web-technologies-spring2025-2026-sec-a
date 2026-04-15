<?php
$name = "World";
$age = 30;
$cgpa = 3.5;

//$std = [1, "saimoon", 3.5];
//$std = array(1, "saimoon", 2.5);
//echo $std[2];

$std = [
    [1, "saimoon", 2.5],
    [2, "saimoon", 3.5],
    [3, "saimoon", 4.5]

];
echo $std[1][2]."<br>";

$std = ["id" => 1, "name" => "saimoon", "cgpa" => 2.5];
echo $std["name"]."<br>";

$std = [
    ["id" => 1, "name" => "saimoon", "cgpa" => 2.5],
    ["id" => 2, "name" => "saimoon", "cgpa" => 3.5],
    ["id" => 3, "name" => "saimoon", "cgpa" => 4.5]
];
echo $std[1]["cgpa"]."<br>";

$stds = [
    "s1" => ["id" => 1, "name" => "saimoon", "cgpa" => 2.5],
    "s2" => ["id" => 2, "name" => "saimoon", "cgpa" => 3.5],
    "s3" => ["id" => 3, "name" => "saimoon", "cgpa" => 4.5]
];

echo $stds["s2"]["id"]."<br>";

echo "Hello " . $stds["s2"]["name"];
echo "<h2>Hello</h2>";

for($a=0; $a<10; $a++){
    echo $a."<br>";
}

foreach($stds as $a){
    echo $a["name"]."<br>";
}

?>