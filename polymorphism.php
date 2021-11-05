<?php

// /* POLYMORPHISM W/ INTERFACES 
// =============================================
// */

// interface Greeting{
//   public function greet();
// }

// class English extends Greeting
// {
// 	public function greet()
// 	{
// 		return "Hello!";
// 	}
// }

// class German extends Greeting
// {
// 	public function greet()
// 	{
// 		return "Hallo!";
// 	}
// }

// class French extends Greeting
// {
// 	public function greet()
// 	{
// 		return "Bonjour!";
// 	}
// }


// function Greeting($people)
// {
// 	foreach ($people as $person) {
// 		echo $person->greet() . "\n";
// 	}
// }

// $people = [
// 	new English(),
// 	new German(),
// 	new French()
// ];

// Greeting($people);

/* POLYMORPHISM W/ ABSTRACT CLASS INHERITENCE 
=============================================
*/

Abstract Class Greeting{
  private static $count = 0; // Class Level variable

  public function __construct()
  {
    self::$count += 1;
    
  }
  Abstract public function greet();

  public static function counter(){
    return self::$count;
  }
}

class English extends Greeting
{
	public function greet()
	{
		return "Hello!";
	}
}

class German extends Greeting
{
	public function greet()
	{
		return "Hallo!";
	}
}

class French extends Greeting
{
	public function greet()
	{
		return "Bonjour!";
	}
}
class Spanish extends Greeting
{
	public function greet()
	{
		return "Hola!";
	}
}


function Greeting($people)
{
  
	foreach ($people as $person) {
		echo $person->greet() . "\n";
   
	}
}

$people = [
	new English(),
	new German(),
	new French(),
  new Spanish()
];
echo Greeting::counter() . " instances of the Greeting class were created. \n";
Greeting($people);
