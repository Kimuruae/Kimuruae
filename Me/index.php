<?php
//This is a single line comment in php
/*This is a multi-line comment in php*/
#This is also a comment

echo"Hello,World!!>";
echo "WTF is wrong with this code ????";
#Varable initialization 
$name ="Kimuruae";
$_age = "21";
$language = "English,Kiswahili,Spanish";

#Output what's assigned to the variables
echo $name;
echo $_age;
echo $language;
#Constants 
define("Credentials","Edwin Kim",false);
echo Credentials; #This will output - Edwin Kim

#Outputing text and a variable
$text = "This is a variable";
echo "Hello $text";

$num1 = 7;
$num2 = 9;
echo $num1 + $num2;
?>