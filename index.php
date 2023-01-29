<?php
class Person
{
 private $__name;
 private $__email;

 public function __construct($name, $email)
 {
  $this->name  = $name;
  $this->email = $email;
  echo __CLASS__ . " created <br>";
 }

 public function __destruct()
 {
  echo __CLASS__ . " destroyed <br>";
 }

 public function setName($name)
 {
  $this->name = $name;
 }

 public function getName()
 {
  return $this->name . "<br>";
 }

 public function setEmail($email)
 {
  return $this->email = $email;
 }

 public function getEmail()
 {
  return $this->email . "<br>";
 }
}

$person1 = new Person("John Doe", "john@doe.com");

// $person1->setName("James Smith");
echo $person1->getName();
// $person1->name = "John Doe";
// echo $person1->name;
