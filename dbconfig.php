<?php

	global $con;

	$con = mysqli_connect('sql112.epizy.com','epiz_31790058','K0NJ9kM45xcsML8','epiz_31790058_wpuas');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}