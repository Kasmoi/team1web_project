<?php
require 'connection.php';

 /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli_query() function / false on failure
     */

	function db_query($query){
		//connect to the database
		$connection=db_connect();
		//query the database
		$result=mysqli_query($connection,$query);
		
		return $result;
	}

 
	/**
     * Fetch the last error from the database
     *
     * @return string Database error message
     */

	function db_error() {
		$connection = db_connect();
		return mysqli_error($connection);
	}


 ?>