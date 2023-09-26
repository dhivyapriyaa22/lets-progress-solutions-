<?php
function number($num){
    $primenumbers=[];
    for($i = 0;$i <= $num; $i++)
    {
        $count=0;
        for($j = 1; $j <= $i; $j++)
        {
            if($i % $j == 0)
            {
                $count++;
            }
        }
        if($count == 2)
        {
            $primenumbers[] =$i;

        }
    }
    return json_encode($primenumbers);
}
$x = readline("Enter a number to find how many prime numbers are there: ");
echo "The prime numbers are:";
echo number($x);
    ?>