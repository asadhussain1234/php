<?php
$var= 100;

function MyLocalVarFunction()
{
	$a= 100;
	$b=200;
	$c = ($a * $b) + ($b - $a);
	
	echo "<br>Result: ".$c;
}



//MyLocalVarFunction();
//echo $a;  //this will give error as this variable is a local scope variable



function MyGlobalVarFunction()
{
	global $var;
	$var += 100;
	
	echo "<br>Var value within function: ".$var;
	$var++;
}

MyGlobalVarFunction();
echo "<br>Var value outside function: ".$var;

MyGlobalVarFunction();

MyGlobalVarFunction();
MyGlobalVarFunction();
MyGlobalVarFunction();



function MyStaticVarFunction()
{
	static $var2= 78;
	echo "<br>Var2 value within function: ".$var2;
	$var2++;
}


MyStaticVarFunction();
MyStaticVarFunction();
MyStaticVarFunction();
echo $var2;

//parametrized function

function ParameterFunction($val,$permit)
{
	if($permit)
	{
		echo "<br>Value is capitalized: ".strtoupper($val); 
	}
	else
	{
		echo "<br>Value is not capitalized: ".$val;
	}
}

ParameterFunction("aptech",true);

ParameterFunction("aptech",false);


?>