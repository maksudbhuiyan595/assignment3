<?php

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    
    // Initialize an empty password
    $password = '';
    
    // Calculate the total number of characters available
    $charCount = strlen($characters);
    
    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charCount - 1)];
        $password .= $randomChar;
    }
    
    return $password;
}

$passwordLength = 12;

$password = generatePassword($passwordLength);
echo "Generated Password: $password\n";

?>
