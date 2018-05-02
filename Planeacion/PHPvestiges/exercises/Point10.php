<?php
// Correct constants names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Incorrect constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP could one day provide a magical constant 
// to break the script
define("__FOO__", "something"); 
?>