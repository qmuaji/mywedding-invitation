<?php 
    $conn = new mysqli("localhost", "root", "password", "rsvp");
	if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
