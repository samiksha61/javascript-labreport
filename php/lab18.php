<?php
//1.
echo "Server's IP address: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server's name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo  "Server's software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

//2.
$x = 5;
function test() {
    $y =10;
     echo "Global variable x is: " . $GLOBALS['x'] . "<br>";
     echo "Local variable y is: $y <br>";

}
test();

//3.
echo date("Y-m-d H.i.s") . "<br>";
echo date("l, F d, Y") . "<br>";


//4.
include 'header.php';
echo "This is the main content. <br>";
include 'footer.php';
//'include_once' and 'require_once' are used when you want to ensure that a file is included or required only once,
// preventing issues with duplicate definitions or content


//5.
$file = fopen("date.txt", "w");
fwrite($file, "Hello , World!");
fclose($file);

//6.
$file = fopen("date.txt", "r");
 echo fread($file, filesize("date.txt")) . "<br>";
fclose($file);

//7.
$file = fopen ("search.txt", "r");
while (!feof($file)) {
    $line = fgets($file);
    if (trim($line)=="STOP"){
        break;

    }
    echo $line . "<br>";
    }
fclose($file);

//8.
$file = fopen ("essay.txt", "r");
$wordCount = 0;
while (!feof($file)){
    $char = fgetc($file);
    if ($char == " " || $char == "\n") {
        $wordCount++;
    }
}
fclose($file);
echo "Word count: $wordCount";
?>
