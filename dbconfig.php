<?php

	global $con;

	$con = mysqli_connect('localhost','root','','uaspw4');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}