<?php

//            4.try to access static method outside of the calss


class Person 
{

static $name ;
static $age ;
public $height;
public $weighit;
 const address ="cairo" ;

 static function print()
 {
     echo " the name is   " . self::$name. "  and it's age is " . self::$age  ;
 }
}
   


Person::$name = "Ali";
Person::$age = "30";

Person::print();




?>