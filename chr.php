<?php
$str = "The string ends in escape: ";
$str .= chr(27); /* add an escape character at the end of $str */

/* Often this is more useful */

$str = sprintf("The string ends in escape: %c", 27); //sprintf() - Return a formatted string with a format string of %c
?>