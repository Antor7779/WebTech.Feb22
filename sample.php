<!DOCTYPE html>
<html>



<body>


	<P>this is antor</P>

<h1>This is heading 1</h1>
<h2>This is heading 2</h2>
<h3>This is heading 3</h3>
<h4>This is heading 4</h4>
<h5>This is heading 5</h5>
<h6>This is heading 6</h6>

<input type="text" name="Aro">

<input type="submit" name="submit">


<td>
	
	<tr>
		


		
	</tr>
</td>

</body>
</html>

<?php 



//br();
echo "iT IS A BEAUTIFUL NIGHT<br>";







 ?>



 <?php
//baking is a good technique
/* I know this is nothing but I got to try
*/
 echo "Antu";


 	$txt="and coffee";
 	$x=5;
 	$y=4.6;
 	//br();
 	echo "<br>I love night with guitar" . $txt. "!"." <br>";
 	//br();
 	echo "The mystical number is".($x + $y)."<br>";



 	?>

   <?php
   //array declaration
  // br();
   	  $cars=array("Ferrari","lamborghini","AstonMartin ");
   	  var_dump($cars);
   	?>

   	<?php
   	class car{

   		function car(){
   			$this->model ="<br>"."The Golden Horse function <br>";
   		}
   	}

   	//to create an object
   	/*see how corby is pointing function car and its properties
   	*/
   	$corby=new car();

   	//show properties of the object
   	echo $corby->model;
   	?>

<?php
//this is while loop example
$x=1;
while($x <=5)
{
	echo "The futue number is : $x <br>";
	$x++;

}

//this is do while practise
$r=7;

do{
	echo "Time to take is $r <br>";
	$r++;
}while($r<=57);


?>

<?php
//behold the for loop
for( $x=12;$x<=21;$x++)
{
	echo "The Reverse pull is : $x <br>";
}
?>

<?php
//behold the foeach loop
$colors=array("red","green","blue");

foreach($colors as $value)
{
	echo " $value <br>";

}
?>

<?php

//example of conditional statement

$a=22;
$b=30;
if($a > $b)
{
	echo "a has bigger number than b";	
}
elseif ($a == $b)
{
	echo "a is equal to b";

}
else
{
	echo "a has yet to learn and grow";
	echo "<br>";
}

?>

<?php
$favcolor="yellow";
switch($favcolor)
{
	case "red":
	echo "my favourite color is red ";
	break;
	case "green":
	echo "your favourite color is green";
	break;
default:
echo "your favourite color is neither red ,blue nor green";


}
?>

<?php
//functions
function addNumbers(int $a,int $b)
{
	return $a+$b;
}
echo "<br>";
echo "I can make that number functional";
echo addNumbers(50,50);
?>



<?php
class Fruit{
	//here is the properties
	public $name;
	//methods
	function set_name($name)
	{
		$this->name=$name;

	}
	function get_name()
	{
		return $this->name;
	}
	  }
	$apple=new Fruit();
	$apple ->set_name('apple');
	echo "<br>";
	echo $apple->get_name();
	?>




