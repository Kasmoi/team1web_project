<?php
/**
     * Validate Form Data
     *
     * @param $input The user input
     * @return string The sanitized and validated user inputs
     */
function validate_input($input){
    #Strip unnecessary characters (extra space, tab, newline) from the user input data
    $input = trim($input); 
    #Remove backslashes (\) from the user input data
    $input = stripslashes($input);
    #Convert special characters to HTML entities
    $input = htmlspecialchars($input);
    return $input;
}
?>