<?php

class Human
{
	public $race;
	protected $creature = "Human being";
	
	public function create_human(){
		$human = $this->creature . " / Race: " . $this->race . "<br>";
		return $human;
	}
}

class Person extends Human
{
	public $name;
	public $surname;
	public $social_number;
	public $address;
	
	public function create_person(){
		$person = "<br><b> PERSONAL INFORMATION: </b><br>" . 
					"Name: " . $this->name . "<br>" .
					"Surname: " . $this->surname . "<br>" .
					"Social number: " . $this->social_number . "<br>" .
					"Address: " . $this->address . "<br>";
		return $person;
	}
}

class Man_person extends Person
{
	protected $gender = "Male <br>";
	private $ribs = 11;
	
	public function create_man_person(){
		$man_person = $this->create_human() . "Gender: " . $this->gender . $this->create_person();
		return $man_person;
	}

}

class Woman_person extends Person
{
	protected $gender = "female";
	private $ribs = 12;
	
	public function create_man_person(){
		$man_person = $this->create_human() . "Gender: " . $this->gender . $this->create_person();
		return $man_person;
	}
}



?>