<?php
function palindrome($str)
{
    $word="";
    $a=strtolower($str);
    $l=strlen($str);
    for($i=($l-1);$i>=0;$i--)
    {
        $word=$word.$a[$i];
    }
if ($a == $word)
{
    echo "$str is a palindrome";
    }
    else
    {
        echo "$str is not a palindrome";
    }
}
    $str = readline("Enter a word/string to check a palindrome: ");
    return palindrome($str);
?>