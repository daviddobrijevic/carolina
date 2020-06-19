<?php

  	$db = new mysqli('localhost', 'root', '', 'carolina');
  	if ($db->connect_error) {
  	   $error = $db->connect_error;
  	}

?>