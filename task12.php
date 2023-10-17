<?php



abstract class Person
{
  
public $name ;
public $age ;
public $height;
public $weighit;
 const address ="cairo" ;

    abstract function print_name ( ): string;

    abstract function print_age ( ): int;




}

//                       1.create class Ali instance of Person Class

class Ali extends Person

{

    function print_name ( ) :string
    {
        return  $this->name ;
    }


    function print_age ( ):int

{

    return $this->age ;
}


function show_address()
{
    return     self:: address ;
}


}
//                     2.create class Nada instance of Person Class

class Nada extends Person  
{

  function print_name ( ):string

  {
return "Nada";

  }

  function print_age ( ):int
  {
return   28 ;

  }
}

$person1 =new Ali ( );

$person1->name="Ali";

$person1->age =25 ;

//                   3.create abtract method to print name and age of Ali calss

echo $person1->print_name( );
echo "<br>";
echo $person1-> print_age ( );



echo "<hr>";

echo "<br>";

//                   5.try to access constant method outside of the calss



echo Ali ::address ;

echo "<br>";


echo $person1->show_address();
 