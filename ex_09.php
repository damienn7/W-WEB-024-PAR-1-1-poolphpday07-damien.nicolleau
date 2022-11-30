<?php

function is_prime($nbr)
{
    if(!isset($nbr) || !is_int($nbr) || $nbr<0)
    {
        return NULL;
    }

    if($nbr==2)
    {
        return true;
    }
    
    for($i=2;$i<$nbr;$i++)
    {
        if($nbr%$i==0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

//var_dump(is_prime(2));