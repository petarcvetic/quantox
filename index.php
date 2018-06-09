<?php
	include("Classes.php");

	$m = new Man_person();

	$m->race = "white";
	$m->name = "John";
	$m->surname = "Smith";
	$m->social_number = "123-12-1234";
	$m->address = "34 West Street";

	echo $m->create_man_person();

?>