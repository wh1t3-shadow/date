<?php
system("clear");
echo"


";
echo"\033[1;32m ------‐---------------------------------------------";
echo"
";
echo"\033[1;36m               Author : wh1t3 shadow     ";
echo"
";
echo "\033[1;36m              Bangladesh Cyber Ghost      ";
echo"
";
echo"\033[1;32m -----‐-----------‐----------------------------------";
echo"





";
echo"\033[1;33m enter 1 for  your age  option ";
     

echo"

";
echo" enter 2 for today date";

function birth(){
system("clear");
echo"
";
$a= readline("enter your birth year : ");
$d="2020"-$a;
echo"
";
echo"your age is $d ";
echo"


";
}



function dat(){

system("clear");
$a= readline("whats your name : ");
system("clear");
echo "

";
echo"             Hi $a  welcome Today      ";
echo"

";

echo "Today is " . date("Y/m/d");

echo "

";


date_default_timezone_set("Bangladesh/Dhaka");


echo "The time is " . date("h:m:sa");

echo "

";





}
echo"

";
$r= readline("\033[1;35m enter your option : ");
              
if($r=="1"){
birth();
}
elseif($r=="2"){
dat();
}

else{
echo "entet a valid option ";
}
echo"

";

?>
