<?php


function  my_facto($nbr)
{
    if($nbr>0 && is_int($nbr))
    {
        $return = 1;
        for ($i=2; $i <= $nbr; $i++) {
            $return *= $i;
        }
        return $return;
    }
    elseif($nbr===0)
    {
        return 1;
    }
    else
    {
        return NUll;
    }
}

//var_dump(my_facto_rec(7));