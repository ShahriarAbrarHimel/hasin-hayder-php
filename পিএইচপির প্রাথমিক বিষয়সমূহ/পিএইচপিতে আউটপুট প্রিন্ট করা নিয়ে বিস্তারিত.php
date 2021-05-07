<?php
$name="email";
var_dump($name);
$age=12;
var_dump($age);
$nill= null;
var_dump($nill);
$mp="";
var_dump($mp);
$hname1="shahriyar";
$hname2="abrar";
var_dump($hname1,$hname2);
$result= true;
var_dump($result);
$name="earth";
$uppername=strtoupper($name);
echo "We're living on {$uppername}";
echo "\n";
printf("we 're living on %s",$name);
echo "\n";
$fname="shahriyar";
$lname="abrar";
printf("his name is %s %s",$fname,$lname);
echo "\n";
printf("his %s name is %s %s",'Full',$fname,$lname);
echo"\n";
printf("his %s %s %s $fname $lname %s","full","name","is","Himel");
echo"
my name is 
{$fname} {$lname} Himel\n
How are you??";
echo "\n";
echo "Total summary oh this code";
echo"\n";
$planet1="Amar bari";
$planet2="Shosur bari";
echo"i have two home on of these is ".$planet1."and another home is ".$planet2."\n";
echo "i have two home on of these is {$planet1} and another home is {$planet2}\n";
printf("i have two home on of these is %s and another home is %s\n",$planet1,$planet2);