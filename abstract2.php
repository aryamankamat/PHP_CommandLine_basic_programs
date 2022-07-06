<?php

/* Write a PHP Script to create a super class Vehicle having members company and price. 
   Derive 2 different classes LightMotorVehicle (members : mileage) and 
   HeavyMotorVehicle (members : capacity-in-tons) from class Vehicle. 
   Define 3 objects of each subclass and display details in tabular format.  */

class Vehicle
{
	protected $company;
	protected $price;
}

class LightMotorVehicle extends Vehicle
{
	protected $mileage;

	function __construct()
	{
		$this->company = readline("Enter the company name of light vehicle : ");
		$this->price = (int)readline("Enter the light vehicle price : ");
		$this->mileage = (int)readline("Enter the mileage of light vehicle : ");
	}

	function display()
	{
		echo "$this->company             $this->price               $this->mileage";
	}
}

class HeavyMotorVehicle extends Vehicle
{
	protected $capacity_in_tons;

	function __construct()
	{
		$this->company = readline("Enter the company name of heavy vehicle : ");
		$this->price = (int)readline("Enter the heavy vehicle price : ");
		$this->capacity_in_tons = (float)readline("Enter the weight carring capacity of heavy vehicle : ");
	}

	function display()
	{
		echo "$this->company             $this->price               $this->capacity_in_tons";
	}
}

$l1 = new LightMotorVehicle();
echo "\n";
$l2 = new LightMotorVehicle();
echo "\n";
$l3 = new LightMotorVehicle();

$lv =  array($l1, $l2, $l3);
echo "\n Light Vehicle Informatiom...\n";
echo "Company name     vehicle price      mileage of vehicle \n";
foreach ($lv as $record) {
	$record->display();
	echo "\n";
}

echo "\n\n";


$h1 = new HeavyMotorVehicle();
echo "\n";
$h2 = new HeavyMotorVehicle();
echo "\n";
$h3 = new HeavyMotorVehicle();

$hv =  array($h1, $h2, $h3);
echo "\n Heavy Vehicle Informatiom...\n";
echo "Company name     vehicle price      vehicle carrying capacity  \n";
foreach ($hv as $record) {
	$record->display();
	echo "\n";
}
