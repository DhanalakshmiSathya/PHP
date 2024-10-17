<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
    <label>Username</label><br>
    <input  type="text" name="peyar" placeholder="your name"/><br>
    <label>Password</label><br>
    <input  type="password" name="hidden" placeholder="your password"/><br>
    <input type="submit" value="log in">
    </form>
    <form action="index.php" method="post">
        <label>Enter number1: </label>
        <input type="text" name="x"><br>
        <label>Enter number2: </label>
        <input type="text" name="y"><br>
        <label>Enter number3: </label>
        <input type="text" name="z"><br>
        <input type="submit" value="Get me">
    </form>

    <form action="index.php" method="post">
        <label>Enter Radius</label>
        <input type="number" name="radius"><br><br>
        <input type="submit" name="submit-btn" value="calculate">
    </form>
    <form action="index.php" method="post">
        <label>List tables</label>
        <input  type="text" name="tables">
        <br>
        <input type="submit" name="btn" value="Get Table"><br>
</form>
    //guess school open or close
    <form action="index.php" method="post" >
        <input type="text" name="news" placeholder="open or leave">
        <input type="submit" name="stop" value="stop">
    </form>-->
</body>
</html>
<?php
 /* echo"tuesday interview..om namashivaya<br>";
echo"got placed at HAl Simplify Solutions<br>";
$name="Shiva";
echo $name;
echo" Hello {$name}<br>";
$price=9.88;
echo"your price is \${$price}";
$user="vivega";
$online=false;
echo"<br>user {$user} is {$online}"; 
$name=" Pizza Ready";
$food="pizza";
$email="contactpizza@ready.com";

$age=17;
$user=2;
$quantity=4;

$gpa=2.5;
$price=79;
$tax_rate=5.1;

$employed=true;
$online=false;
$for_sale=true;

echo " you have ordered {$quantity} * {$food}<br>";
$bill=$quantity*$price;
echo" your bill \${$bill}";
$user="vivega";
$born_year=1977  ;
$current_year=2024;
$calculate_age=$current_year-$born_year;
echo" <br>$user age is $calculate_age";
// operator precedences
//(), **, *,/,%,+,-

//incrementor
$lucky_no=10;
$lucky_no-=5;
echo"vivega fav number is $lucky_no "; */
//echo "{$_GET["password"]}<br>";
/*echo $_POST["peyar"]."<br>";
echo $_POST["hidden"]."<br>"; 
$item="pizza";
$price=79;
$quantity= $_POST["quantity"];
echo "<br>you ordered {$quantity} quantity of {$item}<br>";
$total=$quantity*$price;
echo "your total bill is : {$total}<br>";
$discount=$total/10;
$total=$total-$discount;
echo"hey...you got 10% discount!<br>";
echo"pay {$total}"; */
//$value=$_POST["x"];
//$getme=null;
//$getme=round($value);
// floor function round down
//$getme=floor($value);
//ceil function round down
//$getme=ceil($value);
//echo $getme;
/*$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];
//echo min($x,$y,$z);
$pi=pi();
//echo $pi;
$rand=rand(88,900);
echo $rand;*/
/*$getvalue=$_POST["radius"];
$circumstances=round($getvalue*pi()*2,2);
echo"<br> circumstances of circle is  {$circumstances}cm<br><br>";
//area of the circle pi r^2
$area=round(pi()*pow($getvalue,2),2);
echo "area of the circle is {$area}<br>";
//find volume
$volume=round(4/3*pi()*pow($getvalue,3),2);
echo"volume of the circle is {$volume}";
//switch statement
$result="valid";
switch($result)
 {
    case "good":
        echo"you result is good";
        break;
    case "ok":
        echo"your result is ok";
        break;
    case "amazing":
        echo"your result is amazing";
        break;
    case "excellent":
        echo"your result is excellent";
        break;
    default:
        echo"your result is not valid<br>";
 } 
 //to print the day of the week
 $date=date("l");
// echo "day is {$date}";
switch($date)
{
    case "monday":
        echo"today is monday";
        break;
    case "tuesday":
        echo"today is tuesday";
        break;
    case "wednesday":
        echo"today is wednesday";
        break;
    case "Thursday":
        echo"today is thursday";
        break;
    default:
       echo"no valid day";
} 
//for loop
for($i=1;$i<=100;$i+=2)
{
    echo $i."<br>";
    
} 
//list out tables 
$counter=$_POST["tables"];
for($start=1;$start<=$counter;$start++)
{
    echo "{$start}*{$counter}=".$start*$counter."<br>";
} 
const name="shivayam";
//echo constant("name");
echo name."<BR>";
//magic constant
echo __FILE__."<br>";
echo __LINE__;
//it will take our current function name
function magic_shivam()
{
    echo"<br>om nama shivaya...!<BR>";
    echo __FUNCTION__;
}
magic_shivam(); 
//datatypes in php
scalar data type-- int, string , decimal, boolean
compound---array,objects
special data type--resource, NULL
*/
$dryfruits=array("elachi","badam","nanaari");
foreach($dryfruits as $dummy)
{
    echo"{$dummy}...<br>";
}
?>


