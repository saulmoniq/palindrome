<?php

function palindrome($n, $num){
    // Assigning the value to another variable to not mess up the original.
    $palindrome = $num;
    $all_palindromes = [];
    // Making a while statement to check for all possible iterations, the condition is to stop when the array of palindromes has the desired $n values
    while (count($all_palindromes) < $n){
        //this condition is to ignore the single digit values
        if($palindrome < 10){
            $palindrome++;
            continue;
        }
        //converting the int to a string to check it
        $str_palindrome = strval($palindrome);
        //conditional to check if it is a palindrome my actual value 
        if ($str_palindrome == strrev($str_palindrome)){
            //check if the value is not already inside the array
            if(!in_array($palindrome, $all_palindromes)){
                //adding the value since it is not there
                $all_palindromes[] = $palindrome;
            } else{}
        } $palindrome++;
    }

    //printing the palindromes
    foreach($all_palindromes as $value){
        echo $value . "<br>";
    }

}

//calling the function.
palindrome(100,20);