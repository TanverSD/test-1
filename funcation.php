<?php

function removeSpacesIfLong($inputString) {
    
    $stringLength = strlen($inputString);

    if ($stringLength > 100) {
        
        $modifiedString = str_replace(' ', '', $inputString);
        return $modifiedString;
    } else {
        return $inputString;
    }
}

// Example usage:
$input = "This is a string with spaces and more than 100 characters.";
$output = removeSpacesIfLong($input);
echo $output;

?>
