<?php
class Person
{
 private $__name;
 private $__email;
 private static $__ageLimit = 40;

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

 public static function getAgeLimit()
 {
  return self::$__ageLimit;
 }
}

// Static props and methods
echo Person::getAgeLimit();

// $person1 = new Person("John Doe", "john@doe.com");

// $person1->setName("James Smith");
// echo $person1->getName();
// $person1->name = "John Doe <br>";
// echo $person1->name;

class Customer extends Person
{
 private $__balance;

 public function __construct($name, $email, $balance)
 {
  parent::__construct($name, $email, $balance);
  $this->balance = $balance;
  echo "A new " . __CLASS__ . " has been created<br>";
 }

 public function setBalance($balance)
 {
  $this->balance = $balance;
 }

 public function getBalance()
 {
  return $this->balance . "<br>";
 }
}

// $customer1 = new Customer("John Doe", "jdoe@gmail.com", 300);
// echo $customer1->getBalance();
