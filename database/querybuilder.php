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


	function db_select($query){
		$data = db_query($query);
        if($data == false){
            echo "Database Errors".db_error();

        }else{
            
            if(mysqli_num_rows($data) > 0) {
                return $data;
              }
	}
}

  function db_select_by_id($query){
		$data = db_query($query);
		if($data == false){
            echo "Database Errors".db_error();

        }else{
            
            if(mysqli_num_rows($data) === 1) {
                return $data;
              }
  }
}

 ?>