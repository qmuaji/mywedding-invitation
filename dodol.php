<?php 
    $conn = new mysqli("localhost", "pernikah_dodol", "Muaji*18", "pernikah_rsvp");
	if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
