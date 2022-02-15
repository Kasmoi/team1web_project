<?php
/**
     * Connect to the database
     *
     * @return , return an object representing the connection to the database on success, or FALSE on failure
     */

function db_connect(){
    # Define connection as a static variable, to avoid connecting more than once
    static $conn;
    #Try and connect to the database, if a connection has not been established yet
    if(!isset($conn)){
        #Load configuration as an array. Use the actual location of configuration file
        $config = parse_ini_file('/var/www/html/grouptask/config/config.ini');
        #Create connection
        $conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }  
    // If connection was not successful, handle the error
    if($conn === false) {
        return mysqli_connect_error();
    }else{
        return $conn;
    }
    
    
}


?>