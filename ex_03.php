<?php

function int_pow($nb_a,$nb_b)
{   
    if(is_int($nb_a)&&$nb_b>0)
    {   
        if($nb_b>0)
        {
        $result=1;
        for($i=0;$i<$nb_b;$i++)
        {   
            $result=$result*$nb_a;
        }
        return $result;
    }
    }
    else
    {
        return NULL;
    }
}

//echo int_pow(-2,2);