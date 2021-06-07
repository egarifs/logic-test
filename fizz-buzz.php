<?php
//Created by egarifs25@gmail.com
function fizzBuzz($n)
{
    for ($i = 1; $i <= $n; $i++)
    {
        if($i%3 == 0 && $i % 5 == 0){
            echo "Fizz Buzz ";
        } elseif ($i % 3==0) {
            echo "Fizz ";
        }  elseif ($i % 5==0) {
            echo "Buzz ";
        }else
        {
            echo "$i ";
        }
    }
}

fizzBuzz(20);

?>